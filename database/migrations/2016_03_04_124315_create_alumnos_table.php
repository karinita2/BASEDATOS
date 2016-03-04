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
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('ruta_id')->unsigned();
            
            //responsable - padre - madre
            $table->integer('representante_id')->unsigned();
            $table->integer('padre_id')->unsigned();
            $table->integer('madre_id')->unsigned();

            //talla
            $table->integer('talla_id')->unsigned();
            $table->timestamps();

        $table->foreign('usuario_id')->references('id')->on('create_users_table');
        $table->foreign('ruta_id')->references('id')->on('rutas');
        
        $table->foreign('representante_id')->references('usuario_id')->on('responsables');
        $table->foreign('padre_id')->references('usuario_id')->on('responsables');
        $table->foreign('madre_id')->references('usuario_id')->on('responsables');


        $table->foreign('talla_id')->references('id')->on('tallas');
        });

        Schema::create('actividad_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividad_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->timestamps();

            $table->foreign('actividad_id')->references('id')->on('actividades');
            $table->foreign('alumno_id')->references('usuario_id')->on('alumnos');

            
        });

        Schema::create('c_medica_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('c_medica_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->timestamps();

            $table->foreign('c_medica_id')->references('id')->on('c_medicas');
            $table->foreign('alumno_id')->references('usuario_id')->on('alumnos');

            
        });

        
        Schema::create('nivel_estudio_alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nivel_estudio_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->timestamps();

            $table->foreign('nivel_estudio_id')->references('id')->on('nivel_estudios');
            $table->foreign('alumno_id')->references('usuario_id')->on('alumnos');

            
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
        Schema::drop('c_medica_alumno');
        Schema::drop('nivel_estudio_alumno');
        Schema::drop('alumnos');
    }
}
