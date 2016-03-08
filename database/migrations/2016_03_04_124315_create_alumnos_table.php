<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('id')->unsigned();
            $table->primary('id');
            //$table->integer('user_id')->unsigned();
            $table->integer('ruta_id')->unsigned();
            
            //responsable - padre - madre
            $table->integer('representante_id')->unsigned();
            $table->integer('padre_id')->unsigned();
            $table->integer('madre_id')->unsigned();

            //talla
            $table->integer('talla_id')->unsigned();
            $table->timestamps();

        $table->foreign('id')->references('id')->on('users');
        $table->foreign('ruta_id')->references('id')->on('rutas');
        
        $table->foreign('representante_id')->references('id')->on('responsables');
        $table->foreign('padre_id')->references('id')->on('responsables');
        $table->foreign('madre_id')->references('id')->on('responsables');


        $table->foreign('talla_id')->references('id')->on('tallas');
        });

        Schema::create('actividad_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->timestamps();

            $table->foreign('actividad_id')->references('id')->on('actividades');
            $table->foreign('alumno_id')->references('id')->on('alumnos');

            
        });

        Schema::create('alumno_c_medica', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('c_medica_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->timestamps();

            $table->foreign('c_medica_id')->references('id')->on('c_medicas');
            $table->foreign('alumno_id')->references('id')->on('alumnos');

            
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('actividad_alumno');
        Schema::drop('alumno_c_medica');
        //Schema::drop('nivel_estudio_alumno');
        Schema::drop('alumnos');
    }
}
