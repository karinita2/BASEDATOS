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
         Schema::create('create_users_table', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('nacionalidad', ['V','E'])->default('V');
            $table->string('cedula', 8);
            $table->string('apellido1', 50);
            $table->string('apellido2', 50);
            $table->string('nombre1', 50);
            $table->string('nombre2', 50);
            $table->date('fe_nac');
            $table->enum('edo_civil', ['S','C','D'])->default('S');
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



            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('parroquia_id')->references('id')->on('parroquias');




            $table->rememberToken();
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
        Schema::drop('create_users_table');
    }
}
