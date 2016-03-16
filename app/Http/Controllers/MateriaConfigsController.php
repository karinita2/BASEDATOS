<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Institucion;
use App\InstitucionConfig;
use App\Grado;
use App\Seccion;
use App\MateriaConfig;
use App\Materia;
use Laracasts\Flash\Flash;

class MateriaConfigsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $materia_configs = MateriaConfig::orderBy('id', 'ASC')->paginate(5);
        //dd($materias);
       
        $materia_configs->each(function($materia_configs){
            $materia_configs->materia;
            $materia_configs->institucion_config;
            //$institucion_configs->seccion;
        });
        //dd($materia_configs);
        return view('config.materia_configs.index')
        ->with('materia_configs',$materia_configs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       // $materia_configs = MateriaConfig::orderBy('id', 'ASC')->paginate(5); 
       $institucion_configs = InstitucionConfig::get()->lists('full_name','id');
        //dd($institucion_configs);

        $materias = Materia::orderBy('materia', 'ASC')->lists('materia','id');

        return view('config.materia_configs.create')
        ->with('institucion_configs',$institucion_configs)
        ->with('materias',$materias);

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
        $materia_config = new MateriaConfig($request->all()); 
        $materia_config->save(); 
        //$institucion_config->sync($request->materia_id); 
        Flash::success("Se ha registrado la relación de manera exitosa" ); 
        return redirect()->route('config.materia_configs.index'); 
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
        //lista la informacion correspondiente a la configuracion de materia a evitar

        $materia_config = MateriaConfig::find($id);

        //lista toda la información de materias: institucion-grado-seccion
        //$materia_configs = MateriaConfig::get()->lists('full_name','institucion_config_id');

        $institucion_configs = InstitucionConfig::get()->lists('full_name','id');
        //dd($materia_config);

        $materias = Materia::orderBy('materia', 'ASC')->lists('materia','id');

        return view('config.materia_configs.edit')
        ->with('materia_config',$materia_config)
        ->with('materias',$materias)
        ->with('institucion_configs',$institucion_configs);
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
        dd($request->all());
        $materia_config = MateriaConfig::find($id);
        $materia_config->fill($request->all());
        $materia_config->save();
       
        Flash::success("Se ha editado correctamente la relación" );
        return redirect()->route('config.materia_configs.index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materia_config = MateriaConfig::find($id);
        $materia_config->delete();

        Flash::error("Se ha eliminado correctamente la relación" );

        return redirect()->route('config.materia_configs.index');
    }
}
