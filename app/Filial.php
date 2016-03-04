<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    //
    protected $table = "filials";

    protected $fillable = ['filial'];

    public function trabajadores()
    {
    	return $this->hasMany('App\Trabajador');
    }


}
