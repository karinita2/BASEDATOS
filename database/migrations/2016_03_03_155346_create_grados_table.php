<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grado');
            //$table->integer('institucion_id')->unsigned();


            //$table->foreign('institucion_id')->references('id')->on('instituciones');
            $table->timestamps();
        });

        // institucion_grado -> tabla pivot
        Schema::create('grado_institucion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institucion_id')->unsigned();
            $table->integer('grado_id')->unsigned();


            $table->foreign('institucion_id')->references('id')->on('instituciones');
            $table->foreign('grado_id')->references('id')->on('grados');

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
        Schema::drop('grado_institucion');
        Schema::drop('grados');
    }
}
