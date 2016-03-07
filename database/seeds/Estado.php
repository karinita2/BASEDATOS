<?php

use Illuminate\Database\Seeder;

class Estado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //Model::unguard();
        factory('App\Estado', 5)->create();
        //Model::reguard();
    }
}
