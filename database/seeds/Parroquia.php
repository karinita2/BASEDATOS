<?php

use Illuminate\Database\Seeder;

class Parroquia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory('App\Parroquia', 5)->create();
    }
}
