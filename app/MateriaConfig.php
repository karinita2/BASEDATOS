<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaConfig extends Model
{
    //
 	protected $table = "materia_configs";

    protected $fillable = ['institucion_config_id','materia_id','activo'];



    public function materia()
    {
    	return $this->belongsTo('App\Materia');
    }

    public function institucion_config() 
    {
        return $this->belongsTo('App\InstitucionConfig');
    }

    public function getFullNameAttribute() 
    {
        return $this->institucion_config->institucion->institucion . " / ". $this->institucion_config->grado->grado ." / ". $this->institucion_config->seccion->seccion;
    }





}
