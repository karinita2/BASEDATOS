<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    


    protected $fillable = [
        'nombre', 'user_id','tipo','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function setNombreAttribute($file){
    	 $name = 'aponwao_'. time() . '.' . $file->getClientOriginalExtension();
    	 $this->attributes['nombre'] = $name;
    	 $path = public_path() . '/images/users/';
         $file->move($path,$name);
    }


}
