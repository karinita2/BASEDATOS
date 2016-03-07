<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    //
    protected $table = "nominas";

    protected $fillable = ['nomina'];


    public function trabajadores()
    {
    	return $this->hasMany('App\Trabajador');
    }



}
