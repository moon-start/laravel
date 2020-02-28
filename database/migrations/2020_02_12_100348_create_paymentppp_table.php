<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentpppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentppp', function (Blueprint $table) {
            // $table->increments('Payment_id');  //int 主見
            // $table->increments('id');  //int 主見
            // $table->integer('Payment_id')->index();  //主見
            


            ####### 暫時取消 $table->bigIncrements('id');
            ##$table->string('Invoice_ID',20)->index();
            ## 日期
            $table->dateTime('payment_id')->primary();
            ## 付款
            $table->string('payment',20)->index();
            ## 點數
            $table->integer('points')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paymentppp');
    }
}
