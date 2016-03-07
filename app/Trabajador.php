<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    //
    protected $table = "trabajadores";

    protected $fillable = ['profesion', 'lugar_trabajo', 'departamento', 'telefono_trabajo','usuario_id'];


    public function filial()
    {

    	return $this->belongsTo('App\Filial');
    }

    public function nomina()
    {
    	return $this->belongsTo('App\Nomina');
    }

    
    public function user() 
    {
        return $this->belongsTo('App\User');

    }

    public function responsable() 
    {
        return $this->hasOne('App\Responsable');

    }

    public function docente() 
    {
        return $this->hasOne('App\Docente');

    }

}
