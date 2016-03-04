<?php

namespace Escuelas;

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



}
