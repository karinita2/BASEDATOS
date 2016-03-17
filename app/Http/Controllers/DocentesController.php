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
        //
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
                dd(Carbon::createFromFormat('d/m/Y', $user->fe_nac)->diff(Carbon::now())->format('%y years %m months %d days'));
                
            //$municipios = Municipio::municipios($id);
            return response()->json($municipios);
        }

    }



}
