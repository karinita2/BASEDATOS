<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('materia');
            $table->timestamps();
        });

        /*
        Schema::create('materia_grado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grado_id')->unsigned();
            $table->integer('materia_id')->unsigned();


            $table->foreign('grado_id')->references('id')->on('grados');
            $table->foreign('materia_id')->references('id')->on('materias');

            $table->timestamps();
        });
        */



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('materia_grado');
        Schema::drop('materias');
    }
}
