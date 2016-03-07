<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->enum('vive_con_estudiante', ['S','N'])->default('S');
            $table->enum('es_representante', ['S','N'])->default('N');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('trabajadores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('responsables');
    }
}
