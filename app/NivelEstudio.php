<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelEstudio extends Model
{
    //
    protected $table = "nivel_estudios";

    protected $fillable = ['nivel'];

    
    public function users() 
    {
        return $this->hasMany('App\User');

    }





}
