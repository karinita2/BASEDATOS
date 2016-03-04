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




}
