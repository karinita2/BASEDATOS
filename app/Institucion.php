<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    //
    protected $table = "instituciones";

    protected $fillable = ['institucion'];

    public function grados() 
    {
        return $this->belongsToMany('App\Grado');
    }

    public function rutas()
    {
    	return $this->hasMany('App\Ruta');
    }



}
