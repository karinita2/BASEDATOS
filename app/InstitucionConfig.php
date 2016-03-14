<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstitucionConfig extends Model
{
    
    protected $table = "institucion_configs";

    protected $fillable = ['institucion_id','grado_id','seccion_id','materia_id'];

    public function institucion() 
    {
        return $this->belongsTo('App\Institucion');
    }

    public function grado()
    {
    	return $this->belongsTo('App\Grado');
    }

    public function seccion() 
    {
        return $this->belongsTo('App\Seccion');
    }

    public function materia()
    {
    	return $this->belongsTo('App\Materia');
    }

    public function docente()
    {
        return $this->belongsTo('App\Docente');
    }

}
