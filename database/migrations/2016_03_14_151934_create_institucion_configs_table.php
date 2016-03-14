<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucion_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institucion_id')->unsigned();
            $table->integer('grado_id')->unsigned();
            $table->integer('seccion_id')->unsigned()->nullable();
            $table->integer('materia_id')->unsigned()->nullable();
            $table->integer('docente_id')->unsigned()->nullable();
            $table->boolean('activo');
            $table->timestamps();

            $table->foreign('institucion_id')->references('id')->on('instituciones');
            $table->foreign('grado_id')->references('id')->on('grados');
            $table->foreign('seccion_id')->references('id')->on('secciones');
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('docente_id')->references('id')->on('docentes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('institucion_configs');
    }
}
