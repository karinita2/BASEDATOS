<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory('App\User', 50)->create;

        //Model::unguard();
        factory('App\Estado', 5)->create();
        factory('App\Municipio', 3)->create();
        factory('App\Parroquia', 5)->create();
        factory('App\Filial', 5)->create();
        factory('App\Nomina', 5)->create();
        factory('App\User', 10)->create();
        factory('App\Trabajador', 1)->create();
        factory('App\Docente', 1)->create();
        factory('App\Materia', 1)->create();
        factory('App\Responsable', 1)->create();
        
        factory('App\Talla', 4)->create();
        //factory('App\Institucion', 1)->create();
        //factory('App\Ruta', 1)->create();
        //factory('App\Alumno', 1)->create();
        //Model::reguard();

    }
}
