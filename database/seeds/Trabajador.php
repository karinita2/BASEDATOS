<?php

use Illuminate\Database\Seeder;

class Trabajador extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         factory('App\Trabajador', 3)->create();

    }
}
