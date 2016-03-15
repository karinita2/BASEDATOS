<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    //
    protected $table = "parroquias";

    protected $fillable = ['parroquia', 'municipio_id'];

    
    public function users()
    {
    	return $this->hasMany('App\User');
    }

    public function municipio()
    {
    	return $this->belongsTo('App\Municipio');
    }


    public static function parroquias($id)
    {
        return Parroquia::where('municipio_id','=', $id)->get();
    }

}
