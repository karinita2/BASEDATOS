<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $table = "estados";

    protected $fillable = ['estado'];

    
    public function users()
    {
    	return $this->hasMany('App\User');
    }

    public function municipios()
    {
    	return $this->hasMany('App\Municipio');
    }


}
