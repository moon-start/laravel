<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemOKTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_item_o_k', function (Blueprint $table) {
            $table->increments('Item_id');  //int 主見
            $table->integer('Invoice_ID')->index();
            $table->string('Item_num',20)->index();
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
        Schema::dropIfExists('_item_o_k');
    }
}
