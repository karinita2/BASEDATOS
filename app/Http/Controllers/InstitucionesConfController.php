<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Materia;
use App\Institucion;
use App\InstitucionConfig;
use App\Grado;
use App\Seccion;
use Laracasts\Flash\Flash;

class InstitucionesConfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $institucion_configs = InstitucionConfig::orderBy('id', 'ASC')->paginate(5);
        //dd($materias);
       
        $institucion_configs->each(function($institucion_configs){
            $institucion_configs->institucion;
            $institucion_configs->grado;
            $institucion_configs->seccion;
        });

        return view('config.instituciones_conf.index')
        ->with('institucion_configs',$institucion_configs);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instituciones = Institucion::orderBy('institucion', 'ASC')->lists('institucion','id');
        $grados = Grado::orderBy('grado', 'ASC')->lists('grado','id');
        $secciones = Seccion::orderBy('seccion', 'ASC')->lists('seccion','id');

        return view('config.instituciones_conf.create')
        ->with('instituciones',$instituciones)
        ->with('grados',$grados)
        ->with('secciones',$secciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $institucion_config = new InstitucionConfig($request->all()); 
        $institucion_config->save(); 
        //$institucion_config->sync($request->materia_id); 
        Flash::success("Se ha registrado la relación de manera exitosa" ); 
        return redirect()->route('config.instituciones_conf.index'); 
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
        $institucion_config = InstitucionConfig::find($id);

        $instituciones = Institucion::orderBy('institucion', 'ASC')->lists('institucion','id');
        $grados = Grado::orderBy('grado', 'ASC')->lists('grado','id');
        $secciones = Seccion::orderBy('seccion', 'ASC')->lists('seccion','id');


        return view('config.instituciones_conf.edit')
        ->with('instituciones',$instituciones)
        ->with('grados',$grados)
        ->with('secciones',$secciones)
        ->with('institucion_config',$institucion_config);

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
        $institucion = Institucion::find($id);
        $institucion->fill($request->all());
        $institucion->save();
       
        Flash::success("Se ha editado correctamente la relación" );
        return redirect()->route('config.instituciones_conf.index');   
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
}
