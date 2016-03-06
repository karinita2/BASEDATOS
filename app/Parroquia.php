<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    //
    protected $table = "parroquias";

    protected $fillable = ['parroquia'];

    
    public function users()
    {
    	return $this->hasMany('App\User');
    }

    public function municipio()
    {
    	return $this->belongsTo('App\Municipio');
    }

}
