<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institucion_config_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->boolean('activo')->default(0);
            $table->timestamps();

            $table->foreign('institucion_config_id')->references('id')->on('institucion_configs');
            $table->foreign('materia_id')->references('id')->on('materias');
        });


        Schema::create('materia_config_docente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materia_config_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            $table->boolean('activo')->default(0);

            $table->foreign('materia_config_id')->references('id')->on('materia_configs');
            $table->foreign('docente_id')->references('id')->on('docentes');
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
        Schema::drop('materia_configs');
    }
}
