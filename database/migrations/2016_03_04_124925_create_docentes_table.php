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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

        $table->foreign('user_id')->references('user_id')->on('trabajadores');
        });

        Schema::create('materia_docente', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materia_id')->unsigned();
            $table->integer('docente_id')->unsigned();
            $table->timestamps();

            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('docente_id')->references('user_id')->on('docentes');

            
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('materia_docente');
        Schema::drop('docentes');
    }
}
