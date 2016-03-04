<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    //

    protected $table = "responsables";

    protected $fillable = ['vive_con_estudiante', 'es_representante'];

    public function talla()
    {
    	return $this->belongsTo('App\Talla');
    }

    public function talla()
    {
    	return $this->belongsTo('App\Talla');
    }

    public function talla()
    {
    	return $this->belongsTo('App\Talla');
    }




}
