<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::all();
        return view('pages.transactiondata', compact('transaction'));
        print_r($transaction);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        return view('pages.createtransaction', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'buy' => 'required|numeric',
            'sell' => 'required|numeric',
            'first_balance' => 'required|numeric',
            'last_balance' => 'required|numeric',
            'total_adjust' => 'required|numeric',
            'transaction_date' => 'required|date',
        ]);

        $model = new Transaction();
        $model->product_id = $request->product_id;
        $model->buy = $request->buy;
        $model->sell = $request->sell;
        $model->first_balance = $request->first_balance;
        $model->last_balance = $request->last_balance;
        $model->total_adjust = $request->total_adjust;
        $model->transaction_date = $request->transaction_date;
        $model->save();
        echo ($model);

        return redirect('/transactiondata')->with('success', 'New Transaction Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::all();
        $model = Transaction::find($id);
        return view('pages.edittransaction', compact('model', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required',
            'buy' => 'required|numeric',
            'sell' => 'required|numeric',
            'first_balance' => 'required|numeric',
            'last_balance' => 'required|numeric',
            'total_adjust' => 'required|numeric',
            'transaction_date' => 'required|date',
        ]);

        $model = Transaction::find($id);
        $model->product_id = $request->product_id;
        $model->buy = $request->buy;
        $model->sell = $request->sell;
        $model->first_balance = $request->first_balance;
        $model->last_balance = $request->last_balance;
        $model->total_adjust = $request->total_adjust;
        $model->transaction_date = $request->transaction_date;
        $model->save();
        echo ($model);

        return redirect('/transactiondata')->with('success', 'The transaction has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Transaction::find($id);
        $model->delete();

        return redirect('/transactiondata')->with('delete', 'The selected data has been deleted');
    }
}
