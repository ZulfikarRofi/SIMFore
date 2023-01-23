<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('report');
        Schema::create('report', function (Blueprint $table) {
            $table->id();
            $table->string('forecast_title');
            $table->unsignedBigInteger('transaction_id');
            $table->foreign('transaction_id')->references('id')->on('transaction');
            $table->decimal('alpha');
            $table->decimal('beta');
            $table->decimal('gamma');
            $table->decimal('trend');
            $table->decimal('level');
            $table->decimal('seasonal');
            $table->decimal('forecast');
            $table->date('date_forecast');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
}
