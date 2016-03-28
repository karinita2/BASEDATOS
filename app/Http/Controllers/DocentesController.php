<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Estado;
use App\Filial;
use App\Nomina;
use App\NivelEstudio;
use App\User;
use App\Trabajador;
use App\Docente;
use App\Imagen;
use Laracasts\Flash\Flash;
use Carbon\Carbon;
use App\Http\Requests\DocenteRequest;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $docentes = Docente::orderBy('id', 'ASC')->paginate(5);
        $docentes->each(function($docentes){
            $docentes->trabajador;

           
        });
        //dd($docentes->first()->trabajador->user->fotoCarnet()->nombre);
        return view('registro.docentes.index')->with('docentes', $docentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::orderBy('estado', 'ASC')->lists('estado','id');
        $filiales = Filial::orderBy('filial', 'ASC')->lists('filial','id');
        $nominas = Nomina::orderBy('nomina', 'ASC')->lists('nomina','id');
        $nivel_estudios = NivelEstudio::orderBy('nivel', 'ASC')->lists('nivel','id');
        return view('registro.docentes.create')
        ->with('estados', $estados)
        ->with('filiales', $filiales)
        ->with('nominas', $nominas)
        ->with('nivel_estudios', $nivel_estudios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocenteRequest $request)
    {

        $count = User::where('cedula',$request->cedula)->count();
        //Primero guardo los valores asociados a un usuario
        //Si no existe en la tabla de usuarios, entonces se procede a la carga completa
        //en la tabla de usuarios-trabajadores-docentes
        if($count==0){
            //dd('dentro del if');
            $user = new User($request->all());
            $fe_nac_format = Carbon::createFromFormat('d/m/Y', $user->fe_nac)->format('Y-m-d');
            $user->fe_nac= $fe_nac_format;
            $user->save();

            //luego guardo los valores asociados al trabajador
            $trabajador = new Trabajador($request->all());
            $trabajador->user()->associate($user);
            //$trabajador->id=$user->id;
            $trabajador->save();


            //luego guardo los datos de docente
            $docente = new Docente($request->all());
            $docente->trabajador()->associate($user);
            $docente->save();

            //verificamos si se ha enviado una imagen 
            //procedemos a guardar la imagen en la tabla de imagenes y a asociarla al usuario
            if($request->file('ruta')){
                //procedemos a guardar la imagen en la tabla de imagenes y a asociarla al usuario
                $image= new Imagen();
                $image->setNombreAttribute($request->file('ruta'));
                $image->user()->associate($user);
                //dd($image);
                $image->save();
            }
            Flash::success("Se ha registrado el docente: ".$user->nombre1. " ".$user->apellido1 );
            return redirect()->route('registro.docentes.index');
        }
        //Si el usuario existe en la tabla de usuarios,entonces se procede a verificar si
        // existe en la tabla docentes (para verificar si solo es para actualización de la información)
        // y en la tabla trabajadores (en caso de que se encuentre registrado como representante) 
        else {
              $user = User::where('cedula',$request->cedula)->first();
             
              $count = Docente::where('id',$user->id)->count();
              //Si elusuario esta registrado en la tabla de docentes se procede 
              //a la actualización de los datos
              if($count!=0){
                  return $this->update($request, $user->id);
                                   
              }
              //Si el usuario no se encuentra registrado en la tabla de docentes se procede 
              //a verificar si se encuentra registrado en la tabla de trabajadores
              else {
                    $count = Trabajador::where('id',$user->id)->count();
                    //si existe el usuario en la tabla trabajadores entonces se procede a actualizar 
                    //la tabla de usuarios, trabajadores y a registrar al usuario en la tabla
                    //docentes
                    if($count!=0){
                      //actualizar usuario
                      $user = User::find($user->id);
                      $fe_nac_format = Carbon::createFromFormat('d/m/Y', $request->fe_nac)->format('Y-m-d');
                      $user->fill($request->all());
                      $user->fe_nac= $fe_nac_format;
                      $user->save(); 

                      //actualizar trabajador
                      $trabajador = Trabajador::find($user->id);
                      $trabajador->fill($request->all());
                      $trabajador->save(); 
                       //registrar docente
                      $docente = new Docente($request->all());
                      $docente->id=$user->id;
                      $docente->save();

                      //verificamos si se ha enviado una imagen 
                      if($request->file('ruta')){
                          //procedemos a guardar la imagen en la tabla de imagenes y a asociarla al usuario
                          $count = Imagen::where('user_id',$user->id)->count();
                          if($count==0){
                              //como no existe una imagen asociada a el usuario dado
                              //entonces procedemos a guardarla como nueva y a asociarla
                              $image= new Imagen();
                              $image->setNombreAttribute($request->file('ruta'));
                              $image->user()->associate($user);
                              //dd($image);
                              $image->save();
                          }
                          else {
                              //si existe la imagen asociada a el usuario entonces procedemos
                              //a actualizar la imagen
                              $image = Imagen::where('user_id',$user->id);
                              //$image->fill($request->all());
                              $image->setNombreAttribute($request->file('ruta'));
                              $image->save(); 

                          }
                      }





                      Flash::success("Se ha registrado el docente: ".$user->nombre1. " ".$user->apellido1 );
                      return redirect()->route('registro.docentes.index');


                    }
                    //Si el usuario no existe en la tabla trabajadores, pero si existe en 
                    //la tabla de usuario entonces procedemos a actualizar los datos  de la tabla
                    //de usuario, a registrarlo como trabajador y luego como docente
                    else {
                      //actualizar usuario
                      $user = User::find($user->id);
                      $fe_nac_format = Carbon::createFromFormat('d/m/Y', $request->fe_nac)->format('Y-m-d');
                      $user->fill($request->all());
                      $user->fe_nac= $fe_nac_format;
                      $user->save(); 

                      //registrar trabajador
                      $trabajador = new Trabajador($request->all());
                      $trabajador->id=$user->id;
                      $trabajador->save();
                      
                      //registrar docente
                      $docente = new Docente($request->all());
                      $docente->id=$user->id;
                      $docente->save();


                      //verificamos si se ha enviado una imagen 
                      //procedemos a guardar la imagen en la tabla de imagenes y a asociarla al usuario
                      if($request->file('ruta')){
                          //procedemos a guardar la imagen en la tabla de imagenes y a asociarla al usuario
                          
                          $count = Imagen::where('user_id',$user->id)->count();
                          if($count==0){
                              $image= new Imagen();
                              $image->setNombreAttribute($request->file('ruta'));
                              $image->user()->associate($user);
                          }
                          else{
                            $image= Imagen::where('user_id',$user->id)->first();
                            $image->setNombreAttribute($request->file('ruta'));
                            //$image->user()->associate($user);
                            //dd($image);
                            
                          }
                          $image->save();
                      }

                      Flash::success("Se ha registrado el docente: ".$user->nombre1. " ".$user->apellido1 );
                      return redirect()->route('registro.docentes.index');

                    }
              }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::find($id);
        $estados = Estado::orderBy('estado', 'ASC')->lists('estado','id');
        $filiales = Filial::orderBy('filial', 'ASC')->lists('filial','id');
        $nominas = Nomina::orderBy('nomina', 'ASC')->lists('nomina','id');
        $nivel_estudios = NivelEstudio::orderBy('nivel', 'ASC')->lists('nivel','id');   

        $fe_nac_format = Carbon::createFromFormat('Y-m-d', $docente->trabajador->user->fe_nac)->format('d/m/Y');
        $edad= Carbon::createFromFormat('Y-m-d', $docente->trabajador->user->fe_nac)->diff(Carbon::now())->format('%y');
                      //$user
          $docente->trabajador->user->fe_nac= $fe_nac_format;
          $docente->trabajador->user->edad= $edad;

         return view('registro.docentes.edit')
         ->with('docente',$docente)
         ->with('estados',$estados)
         ->with('filiales', $filiales)
         ->with('nominas', $nominas)
         ->with('nivel_estudios', $nivel_estudios);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocenteRequest $request, $id)
    {
            //dd('actualizar docente');
            
            $user = User::find($id);
            $fe_nac_format = Carbon::createFromFormat('d/m/Y', $request->fe_nac)->format('Y-m-d');
            $user->fill($request->all());
            $user->fe_nac= $fe_nac_format;
            $user->save(); 


            //luego actualizo los valores asociados al trabajador
            $trabajador = Trabajador::find($user->id);
            $trabajador->fill($request->all());
            $trabajador->save();


            //guardo los datos de docente
            $docente = Docente::find($user->id);
            $docente->fill($request->all());
            $docente->save();

              //verificamos si se ha enviado una imagen 
            //procedemos a guardar la imagen en la tabla de imagenes y a asociarla al usuario
            if($request->file('ruta')){
                //procedemos a guardar la imagen en la tabla de imagenes y a asociarla al usuario
                
                $count = Imagen::where('user_id',$user->id)->count();
                if($count==0){
                    $image= new Imagen();
                    $image->setNombreAttribute($request->file('ruta'));
                    $image->user()->associate($user);
                }
                else{
                  $image= Imagen::where('user_id',$user->id)->first();
                  $image->setNombreAttribute($request->file('ruta'));
                  //$image->user()->associate($user);
                  //dd($image);
                  
                }
                $image->save();
            }

            Flash::success("Se ha actualizado el docente: ".$user->nombre1. " ".$user->apellido1 );
            return redirect()->route('registro.docentes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getEdad(Request $request, $id)
    {
   
        if($request->ajax()){
                return Carbon::createFromFormat('d-m-Y', $id)->diff(Carbon::now())->format('%y');
                
           //$municipios = Municipio::municipios($id);
            //return response()->json($municipios);
        }

    }

    public function getVerificaCedulaDocente(Request $request, $id)
    {
        
        if($request->ajax()){
                $count = User::where('cedula',$id)->count();
                if($count==1){
                  $user = User::where('cedula',$id)->first();
                  $count = Docente::where('id',$user->id)->count();
                  //$count = User::where('cedula',$id)->count();
                  //$count = Docente::where('id',$user->id)->count();
                      if($count==1){
                          //$user = User::where('cedula',$id)->first();
                          $docente = Docente::find($user->id);
                          return response()->json($docente);
                      }
                      else {
                          $docente=new Docente;
                          return response()->json($docente->getFillable());
                      }
                }
                else {
                          $docente=new Docente;
                          return response()->json($docente->getFillable());
                }
          
           //$municipios = Municipio::municipios($id);
            //return response()->json($municipios);
        }
    }

    public function getTrabajadorJSON(Request $request, $id)
    {
        //echo $id;
        if($request->ajax()){
                
                $count = User::where('cedula',$id)->count();
                if($count==1){
                $user = User::where('cedula',$id)->first();

                $count = Trabajador::where('id',$user->id)->count();

                //$count = Docente::where('id',$user->id)->count();
                //$count = Docente::where('id',$user->id)->count();
                    if($count==1){

                        $trabajador = Trabajador::find($user->id);
                        return response()->json($trabajador);
                    }
                    else {
                          $trabajador=new Trabajador;
                          return $trabajador->getFillable();
                    }
                }
                else {
                        $trabajador=new Trabajador;
                        return $trabajador->getFillable();
                }


        }
    }
    
    public function getUsuarioJSON(Request $request, $id)
    {
        
          if($request->ajax()){
                  
        //dd($user->imagens_consulta());
                  
                  $count = User::where('cedula',$id)->count();
                  if($count==1){
                      $user = User::where('cedula',$id)->first();

                      //$user = User::find($id);
                      $fe_nac_format = Carbon::createFromFormat('Y-m-d', $user->fe_nac)->format('d/m/Y');
                      $edad= Carbon::createFromFormat('Y-m-d', $user->fe_nac)->diff(Carbon::now())->format('%y');
                      //$user
                      
                      $var=$user->imagens_consulta();
                      $var->fe_nac= $fe_nac_format;
                      $var->edad= $edad;
                      return response()->json($var);
                  }
                  else {
                        $user=new User;
                        $campos = $user->getFillable();
                        //se añade la edad como elemmento de datos de usuario
                        //para que pueda ser borrado su valor en el formulario
                        array_push ( $campos , "edad" );
                       //se elimina el campo cedula para que su valor no pueda ser 
                        //eliminado del campo de formulario
                       if(($key = array_search("cedula", $campos)) !== false) {
                            unset($campos[$key]);
                       }
                       return response()->json($campos);
                  }
         }
    }

}
