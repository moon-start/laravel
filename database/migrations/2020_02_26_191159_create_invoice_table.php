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
            // $table->bigIncrements('id');
            // $table->timestamps();

            ## 發票
            ## $table->string('Invoice_name',11)->unique()->index();
            $table->string('id',11)->primary();
            ## 地點
            $table->string('location',20)->index(); 
            ## (外部ID) 
            ## $table->integer('Payment_ID')->unique()->index();
            $table->dateTime('Payment_ID')->unique()->index();
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
