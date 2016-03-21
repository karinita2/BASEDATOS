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
use Laracasts\Flash\Flash;
use Carbon\Carbon;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd("aqui");
        $docentes = Docente::orderBy('id', 'ASC')->paginate(5);
        $docentes->each(function($docentes){
            $docentes->trabajador;
           
        });
        //dd($docentes);
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
    public function store(Request $request)
    {
        //Primero guardo los valores asociados a un usuario
        //dd($request->cedula);
        $count = User::where('cedula',$request->cedula)->count();

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
            $trabajador->id=$user->id;
            $trabajador->save();

            //luego guardo los datos de docente
            $docente = new Docente($request->all());
            $docente->id=$user->id;
            $docente->save();

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

                      Flash::success("Se ha registrado el docente: ".$user->nombre1. " ".$user->apellido1 );
                      return redirect()->route('registro.docentes.index');


                    }
                    else {

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            dd('actualizar docente');
            /*
            $user = User::find($user->id);
            $fe_nac_format = Carbon::createFromFormat('d/m/Y', $request->fe_nac)->format('Y-m-d');
            $user->fill($request->all());
            $user->fe_nac= $fe_nac_format;
            $user->save(); 


            $user = new User($request->all());
            $fe_nac_format = Carbon::createFromFormat('d/m/Y', $user->fe_nac)->format('Y-m-d');
            $user->fe_nac= $fe_nac_format;
            $user->save();

            //luego guardo los valores asociados al trabajador
            $trabajador = new Trabajador($request->all());
            $trabajador->id=$user->id;
            $trabajador->save();

            //luego guardo los datos de docente
            $docente = new Docente($request->all());
            $docente->id=$user->id;
            $docente->save();

            Flash::success("Se ha registrado el docente: ".$user->nombre1. " ".$user->apellido1 );
            return redirect()->route('registro.docentes.index');

*/

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
                
                $user = User::where('cedula',$id)->first();
                $count = Docente::where('id',$user->id)->count();
                //$count = User::where('cedula',$id)->count();
                //$count = Docente::where('id',$user->id)->count();
                    if($count==1){
                        //$user = User::where('cedula',$id)->first();
                        $docente = Docente::find($user->id);
                           return response()->json($docente);
                    }
                    else 
                        return '0';
          
           //$municipios = Municipio::municipios($id);
            //return response()->json($municipios);
        }
    }

    public function getTrabajadorJSON(Request $request, $id)
    {
        //echo $id;
        if($request->ajax()){
                
                
                $user = User::where('cedula',$id)->first();

                $count = Trabajador::where('id',$user->id)->count();

                //$count = Docente::where('id',$user->id)->count();
                //$count = Docente::where('id',$user->id)->count();
                    if($count==1){

                        $trabajador = Trabajador::find($user->id);
                        return response()->json($trabajador);
                    }
                    else 
                        return '0';
        }
    }
    
    public function getUsuarioJSON(Request $request, $id)
    {
        
        if($request->ajax()){
                $user = User::where('cedula',$id)->first();

                //$user = User::find($id);
                $fe_nac_format = Carbon::createFromFormat('Y-m-d', $user->fe_nac)->format('d/m/Y');
                $edad= Carbon::createFromFormat('Y-m-d', $user->fe_nac)->diff(Carbon::now())->format('%y');
                $user->fe_nac= $fe_nac_format;
                $user->edad= $edad;

              

                    return response()->json($user);
                    
          
           //$municipios = Municipio::municipios($id);
            //return response()->json($municipios);
        }
    }

}
