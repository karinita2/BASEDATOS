<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nacionalidad', 'cedula', 'apellido1','apellido2','nombre1','nombre2','fe_nac','edo_civil','sexo','lugar_nacimiento','religion', 'direccion','telefono_hab','telefono_cel', 'email', 'estado_id', 'municipio_id','parroquia_id','nivel_estudio_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function estado()
    {

        return $this->belongsTo('App\Estado');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    public function parroquia()
    {
        return $this->belongsTo('App\Parroquia');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Rol');
    }

    public function nivel_estudio() 
    {
        return $this->belongsTo('App\NivelEstudio');

    }

    public function trabajador() 
    {
        return $this->hasOne('App\Trabajador','id','id');

    }

    public function alumno() 
    {
        return $this->hasOne('App\Alumno','id','id');

    }
    
    public function imagens() 
    {
       return $this->hasMany('App\Imagen');

    }

    public function imagens_consulta() 
    {
       return DB::table('users')
            ->leftJoin('imagens','imagens.user_id','=','users.id')
            ->select('users.*','imagens.nombre')
            ->where('users.id',$this->id)->first();

    }
    public function fotoCarnet() 
    {
       return DB::table('users')
            ->leftJoin('imagens','imagens.user_id','=','users.id')
            ->select('users.*','imagens.nombre')
            ->where('imagens.tipo','C')
            ->where('users.id',$this->id)->first();

    }


}
