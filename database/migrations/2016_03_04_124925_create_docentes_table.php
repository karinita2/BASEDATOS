<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('id')->unsigned();
            $table->primary('id');
            //$table->integer('user_id')->unsigned();
            $table->timestamps();

        $table->foreign('id')->references('id')->on('trabajadores');
        });

        Schema::create('docente_materia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materia_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            $table->timestamps();

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
        Schema::drop('docente_materia');
        Schema::drop('docentes');
    }
}
