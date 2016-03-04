<?php

namespace Escuelas;

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




}
