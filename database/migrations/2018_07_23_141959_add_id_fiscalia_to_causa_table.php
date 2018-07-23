<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdFiscaliaToCausaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('causa', function (Blueprint $table) {
            $table->integer('id_fiscalia')->unsigned();
            $table->foreign('id_fiscalia')->references('id')->on('fiscalia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('causa', function (Blueprint $table) {
            //
        });
    }
}
