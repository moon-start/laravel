<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->timestamps();


            ####### 暫時取消 
            $table->bigIncrements('id');
    
            
            ## 日期
            // $table->dateTime('id')->primary();
            $table->dateTime('date',20)->index();
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
        Schema::dropIfExists('payment');
    }
}
