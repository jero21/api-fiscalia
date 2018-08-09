<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCausasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('especie', function (Blueprint $table) {
      $table->increments('id');
      $table->string('RUC');
      $table->string('RUE');
      $table->text('descripcion');
      $table->date('fecha_incautacion')->nullable();
      $table->date('fecha_ingreso')->nullable();
      $table->boolean('trimestre_vigente')->default(true);
      $table->enum('trimestre', ['primero', 'segundo', 'tercero', 'cuarto']);
      $table->integer('anio');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('especie');
  }
}
