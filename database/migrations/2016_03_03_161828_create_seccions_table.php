<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seccion');
            $table->timestamps();
        });

        
        Schema::create('grado_seccion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grado_id')->unsigned();
            $table->integer('seccion_id')->unsigned();


            $table->foreign('grado_id')->references('id')->on('grados');
            $table->foreign('seccion_id')->references('id')->on('secciones');

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
        Schema::drop('grado_seccion');
        Schema::drop('secciones');
    }
}
