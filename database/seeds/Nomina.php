<?php

use Illuminate\Database\Seeder;

class Nomina extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        //
         factory('App\Nomina', 3)->create();
    }
}
