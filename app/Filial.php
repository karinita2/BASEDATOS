<?php

namespace App;

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

    public function scopeSearch($query, $filial){

    	//dd('scope '.$filial);
    	//if($filial!="")
    	return $query->where('filial', 'LIKE', "%$filial%");
    }

}
