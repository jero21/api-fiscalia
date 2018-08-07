<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToCausaTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('especie', function (Blueprint $table) {
        $table->integer('id_sub_tipo_especie')->unsigned();
        $table->foreign('id_sub_tipo_especie')->references('id')->on('sub_tipo_especie');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('especie', function (Blueprint $table) {
        //
    });
  }
}
