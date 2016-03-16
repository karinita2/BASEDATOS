<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstitucionConfig extends Model
{
    
    protected $table = "institucion_grado_seccion";

    protected $fillable = ['institucion_id','grado_id','seccion_id','activo'];

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

}
