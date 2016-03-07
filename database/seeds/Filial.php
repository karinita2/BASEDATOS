<?php

use Illuminate\Database\Seeder;

class Filial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         factory('App\Filial', 3)->create();
    
    }
}
