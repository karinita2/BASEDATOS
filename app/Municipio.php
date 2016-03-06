<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    //
    protected $table = "municipios";

    protected $fillable = ['municipio'];

    
    public function users()
    {
    	return $this->hasMany('App\User');
    }

    public function estado()
    {
    	return $this->belongsTo('App\Estado');
    }
    
    public function parroquias()
    {
    	return $this->hasMany('App\Parroquia');
    }


}
