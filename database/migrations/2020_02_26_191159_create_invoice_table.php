<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
          
            // $table->timestamps();

            // $table->bigIncrements('id'); //big
            $table->increments('id');    //int
            ## 發票
            // $table->string('id',11)->primary();
            $table->string('Invoice',11)->unique()->index();
            ## 地點
            $table->string('location',20)->index(); 
            ## (外部ID) 
            // $table->dateTime('Payment_ID')->unique()->index();
            $table->integer('Payment_ID')->unique()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
