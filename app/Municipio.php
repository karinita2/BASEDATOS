<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    //
    protected $table = "municipios";

    protected $fillable = ['municipio', 'estado_id'];

    
    public function users()
    {
    	return $this->hasMany('App\User');
    }

    public function estado()
    {
    	return $this->belongsTo('App\Estado');
    }
    
    public function parroquias()
    {
    	return $this->hasMany('App\Parroquia');
    }

    public static function municipios($id)
    {
        return Municipio::where('estado_id','=', $id)->get();
    }

}
