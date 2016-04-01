<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Docente extends Model
{
    //
    protected $table = "docentes";

    protected $fillable = ['id'];
    /*
    public function materias() 
    {
        return $this->belongsToMany('App\Materia');
    }
    */

    public function institucion_configs()
    {
        return $this->hasMany('App\InstitucionConfig');
    }


    public function trabajador() 
    {
        return $this->belongsTo('App\Trabajador','id','id');
    }

    public function materia_configs() 
    {
        return $this->belongsToMany('App\MateriaConfig');
    }

    public static function datosDocentesFull() 
    {
       return DB::table('docentes')
            ->leftJoin('trabajadores','trabajadores.id','=','docentes.id')
            ->leftJoin('users','users.id','=','docentes.id')
            
            ->leftJoin('nivel_estudios','nivel_estudios.id','=','users.nivel_estudio_id')
            ->leftJoin('filials','filials.id','=','trabajadores.filial_id')
            ->leftJoin('nominas','nominas.id','=','trabajadores.nomina_id')
            ->leftJoin('estados','estados.id','=','users.estado_id')
            ->leftJoin('municipios','municipios.id','=','users.municipio_id')
            ->leftJoin('parroquias','parroquias.id','=','users.parroquia_id')

            ->select('users.id',
                    'users.nacionalidad',
                    'users.cedula',
                    'users.apellido1',
                    'users.apellido2',
                    'users.nombre1',
                    'users.nombre2',
                    'users.fe_nac',

                    'users.edo_civil',
                    'users.sexo',
                    'users.lugar_nacimiento',
                    'users.direccion',
                    'estados.estado',
                    'municipios.municipio',
                    'parroquias.parroquia',
                    'users.telefono_hab',
                    'users.telefono_cel',
                    'users.email',
                    'nivel_estudios.nivel',

                    'trabajadores.profesion',
                    'trabajadores.lugar_trabajo',
                    'trabajadores.departamento',
                    'trabajadores.telefono_trabajo',
                    'nominas.nomina',
                    'filials.filial'
  
                    
                    )->get();

    }

}
