<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CMedica extends Model
{
    protected $table = "c_medicas";

    protected $fillable = ['cmedica'];

    public function alumnos() 
    {
        return $this->belongsToMany('App\Alumno');
    }



}
