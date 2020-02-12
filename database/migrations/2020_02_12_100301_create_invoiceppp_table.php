<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicepppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoiceppp', function (Blueprint $table) {
        //   $table->bigIncrements('id');
        //   $table->timestamps();
          ## int(10)
        //   $table->increments('Invoice_id');  //int
        $table->bigIncrements('id');
        

        $table->string('Invoice_name',11)->unique()->index();
        $table->string('Shop_name',20)->index();  
        $table->integer('Payment_ID')->unique()->index();
          //協助建立追踪的時間
          //$table->timestamps();
          ## 軟刪除的欄位
          //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoiceppp');
    }
}
