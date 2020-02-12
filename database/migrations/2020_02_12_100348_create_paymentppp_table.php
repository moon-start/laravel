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
            $table->increments('id');  //int 主見
            // $table->integer('Payment_id')->index();  //主見
            $table->string('Invoice_ID',20)->index();
            $table->string('Payment_name',20)->index();
            $table->integer('Payment_price')->index();
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
