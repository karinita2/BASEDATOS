<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('profesion', 100);
            $table->string('lugar_trabajo', 100);
            $table->string('departamento', 100);
            $table->string('telefono_trabajo', 100);

            $table->integer('nomina_id')->unsigned();
            $table->integer('filial_id')->unsigned();
            //$table->integer('')
            




            $table->foreign('nomina_id')->references('id')->on('nominas');
            $table->foreign('filial_id')->references('id')->on('filials');
            $table->foreign('id')->references('id')->on('users');
            //$table->integer('parroquia_id')->unsigned();


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
        Schema::drop('trabajadores');
    }
}
