<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    


    protected $fillable = ['nombre', 'tipo', 'user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function setNombreAttribute($file){

        $name = 'aponwao_'. date('d-m-Y').'_'.time() . '_' .rand(11111,99999).'.'. $file->getClientOriginalExtension();
        $path = public_path() . '/images/users/';
        // Verificamos Si hay un nombre de archivo
        if(!isset($this->attributes['nombre'])){
            //Si no hay nombre de archivo entonces procedemos a guardar la imagen
            //Guardar una imagen nueva
             $this->attributes['nombre'] = $name;
             $file->move($path,$name);
        }
        else {
            //si hay un nombre archivo verificamos si existe la imagen asociada
             if(file_exists (public_path() . '/images/users/'.$this->attributes['nombre'])){
                //Si existe la eliminamos
                if(unlink(public_path() . '/images/users/'.$this->attributes['nombre'])){
                    //Ahora guardamos el nuevo nombre de imagen y la subimos
                    //Actualizamos la imagen
                    $this->attributes['nombre'] = $name;
                    $file->move($path,$name);
                }

             }
             else {
                //Si esta un nombre de imagen guardado pero no esta el archivo, se procede
                //a guardar el nuevo nombre y a  subir la imagen
                //esto generalmente pasa si borras el archivo pero no el nombre en la BD
                    $this->attributes['nombre'] = $name;
                    $file->move($path,$name);

             }
        }
    }
    /*
    public function setNombreAttribute($fileName, $path,$defaultName=null){
        $photo= null;
        $file=Input::file($fileName);
        //verificamos si hay una  immagen
        if(Input::hasFile($fileName)){
            $destinationPath = $path;
            $extension       = $file->getClientOriginalExtension();
            $name            = 'aponwao_'. date('d-m-Y').'_'.time() . '.' .rand(11111,99999).'.'.$extension;
    	    $photo           = $destinationPath.'/'.$name;
    	    $file->move($destinationPath,$name);
         $this->attributes['nombre'] = $name;
    	 $path = ;
        
        }
    }*/


}
