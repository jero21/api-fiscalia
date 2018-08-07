<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToSubTipoEspecieTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('sub_tipo_especie', function (Blueprint $table) {
      $table->integer('id_tipo_especie')->unsigned();
      $table->foreign('id_tipo_especie')->references('id')->on('tipo_especie');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('sub_tipo_especie', function (Blueprint $table) {
        //
    });
  }
}
