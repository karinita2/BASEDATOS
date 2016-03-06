<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = "roles";

    protected $fillable = ['rol'];


    public function users()
    {
    	return $this->belongsToMany('App\User');
    }


}
