<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItempppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemppp', function (Blueprint $table) {
            // $table->increments('Item_id');  //int 主見

            ## id
            $table->bigIncrements('id');
            ## (多)
            ## $table->integer('Invoice_ID')->index();
            $table->string('Invoice_ID')->index();
            ## 項目
            $table->string('item',20)->index();
            ## integer 加上長度 會錯誤
            $table->integer('money')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemppp');
    }
}
