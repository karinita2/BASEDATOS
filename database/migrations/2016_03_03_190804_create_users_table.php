<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('nacionalidad', ['V','E'])->default('V');
            $table->string('cedula', 8);
            $table->string('apellido1', 50);
            $table->string('apellido2', 50);
            $table->string('nombre1', 50);
            $table->string('nombre2', 50);
            $table->date('fe_nac');
            $table->enum('edo_civil', ['S','C','D','CC'])->default('S');
            $table->enum('sexo', ['M','F'])->default('M');
            $table->string('lugar_nacimiento');
            $table->string('religion');
            $table->string('direccion');
            $table->string('telefono_hab');
            $table->string('telefono_cel');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('estado_id')->unsigned();
            $table->integer('municipio_id')->unsigned();
            $table->integer('parroquia_id')->unsigned();
            $table->integer('nivel_estudio_id')->unsigned();



            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('parroquia_id')->references('id')->on('parroquias');
            $table->foreign('nivel_estudio_id')->references('id')->on('nivel_estudios');




            $table->rememberToken();
            $table->timestamps();

        });

        Schema::create('rol_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rol_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('rol_id')->references('id')->on('roles');
            $table->foreign('user_id')->references('id')->on('users');

            
        });

        /*
        Schema::create('nivel_estudio_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nivel_estudio_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('nivel_estudio_id')->references('id')->on('nivel_estudios');
            $table->foreign('user_id')->references('id')->on('users');

            
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
        Schema::drop('rol_user');
        //Schema::drop('nivel_estudio_user');
        Schema::drop('users');
    }
}
