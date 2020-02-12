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
            $table->increments('Item_id');  //int 主見
            $table->integer('Invoice_ID')->index();
            $table->string('Item_num',20)->index();
            ## integer 加上長度 會錯誤
            $table->integer('Points')->index();
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
