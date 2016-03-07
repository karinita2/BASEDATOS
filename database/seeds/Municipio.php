<?php

use Illuminate\Database\Seeder;

class Municipio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         factory('App\Municipio', 3)->create();
    }
}
