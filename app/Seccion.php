<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    //
    protected $table = "secciones";

    protected $fillable = ['seccion'];

   
    public function materias() 
    {
        return $this->belongsToMany('App\Materia');
    }

    //Relacion Seccion-Grado - Many to Many
    public function grados() 
    {
        return $this->belongsToMany('App\Grado');
    }


}
