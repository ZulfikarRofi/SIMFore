<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForecastingController extends Controller
{
    public function holtWinters(Request $request)
    {
        //Starting Defined Variables
        //Defining Period
        $firstStart = new DateTime($request->firststartyear . "" . $request->firststartmonth . "-01");
        $firstEnd = new DateTime($request->firstendyear . "-" . $request->firstendmonth . "-01");
        //
        
        $secondStart = new DateTime($request->secondstartyear . "" . $request->secondstartmonth . "-01");
        $secondEnd = new DateTime($request->secondendyear . "-" . $request->secondendmonth . "-01");

        $forecastTime = $secondEnd->format('Y-m-t');
        $result = new DateTime($forecastTime);

        $alpha = (float) $request->alpha;
        $alphamin = 1 - $alpha;

        $beta = (float) $request->beta;
        $betamin = 1 - $beta;

        $gamma = (float) $request->gamma;
        $gammamin = 1 - $gamma;

        $k = 1;


        //First Period
        $firstperiod = Transaction::select(
            DB::raw('transaction.sell as total_sell'),
            DB::raw("DATE_FORMAT(transaction.transaction_date, '%M %Y') as months")
        )
            ->join('transaction', 'tranasaction.id_product', '=', 'product.id_product')
            ->groupBy('months')->where('product', $request->product)
            ->whereBetween('transaction.transaction_date', [$firstStart, $firstEnd])
            ->orderBy('transaction.transaction_date', 'ASC')
            ->get()->toArray();

        $levelTmin =  count($firstperiod); /*Average of sale in first period */
        $initTrend = Transaction::select(
            DB::raw('')
        )->get(); /* Hasil selisih periode 1 dikurangi periode 2 dibagi range tiap periode */
        $firstSeasonal = $firstperiod / count($firstperiod);  /* Sale in time t divide by Ltmin */


        // Second Period
        $secondPeriod = Transaction::select(
            DB::raw('tranasction.sell as total_sell'),
            DB::raw("DATE_FORMAT(transaction.transaction_date, '%M %Y') as months")
        )
            ->join('transaction', 'tranasaction.id_product', '=', 'product.id_product')
            ->groupBy('months')->where('product', $request->product)
            ->whereBetween('transaction.transaction_date', [$secondStart, $secondEnd])
            ->orderBy('transaction.transaction_date', 'ASC')
            ->get()->toArray();

        //First Forecasting

        $levelT = $alpha * ($firstSeasonal) + $alphamin * ($levelTmin + $initTrend); /* alpha * (sell / first seasonal) + $aplhamin * (LevelTmin + initialTrend) */
        $trendT = $beta * ($levelT - $levelTmin) + $betamin * $initTrend; /* beta * ($levelT - $levelTmin) + $betamin * $initTrend */
        $seasonalT = $gamma * ($levelT) + $gammamin * $firstSeasonal; /* gamma * (sell / $level t) + $gammamin * Seasonal first Period */
        $forecast = ($levelTmin * $initTrend + 1) * $firstSeasonal; /* ($levelTmin * $initTrend + k) * $firstSeasonal */

        $x = array();

        $loop = 0;


        //Third Period
        for ($s = $firstStart; $s <= $secondEnd; $s->modify('+1 month')) {
            $x[$loop]['months'] = $s->format("F Y");

            if (!$firstperiod) {
                $s[$loop]['sell'] = 0;
            }

            foreach ($firstperiod as $fp) {
                if ($fp['months'] == $s->format('F Y')) {
                    $x[$loop]['sell'] = $fp['sell'];
                    break;
                } else {
                    $x[$loop]['sell'] = 0;
                }
            }
            $loop++;
        }

        /* Looping for Next Period Forecast */
        return redirect('/forecastinghw');
    }
}
