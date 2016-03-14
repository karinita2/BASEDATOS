<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institucion');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->integer('estado_id')->unsigned();
            $table->integer('municipio_id')->unsigned();
            $table->integer('parroquia_id')->unsigned();

            $table->timestamps();

            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('parroquia_id')->references('id')->on('parroquias');

        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instituciones');
    }
}
