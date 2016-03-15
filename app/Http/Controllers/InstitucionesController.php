<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Institucion;
use App\Ruta;
use App\Grado;
use App\Estado;
use App\Municipio;
use App\Parroquia;
use Laracasts\Flash\Flash;
use App\Http\Requests\InstitucionRequest;



class InstitucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituciones = Institucion::orderBy('id', 'ASC')->paginate(5);
        return view('config.instituciones.index')->with('instituciones', $instituciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::orderBy('estado', 'ASC')->lists('estado','id');
        return view('config.instituciones.create')
        ->with('estados', $estados);;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstitucionRequest $request)
    {
        //dd($request->all());
        $institucion = new Institucion($request->all());
        $institucion->save();

        Flash::success("Se ha registrado ".$institucion->institucion );
       
        return redirect()->route('config.instituciones.index');
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
         $institucion = Institucion::find($id);
         $estados = Estado::orderBy('estado', 'ASC')->lists('estado','id');
                 
         return view('config.instituciones.edit')
         ->with('institucion',$institucion)
         ->with('estados',$estados);
         ;
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
        //dd($request->grado_id);
        $institucion = Institucion::find($id);
        $institucion->fill($request->all());
        $institucion->save();
       
        Flash::success("Se ha editado ".$institucion->institucion );
        return redirect()->route('config.instituciones.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institucion = Institucion::find($id);
        $institucion->delete();

        Flash::error("Se ha eliminado ".$institucion->institucion );

        return redirect()->route('config.instituciones.index');

    }

    public function getMunicipios(Request $request, $id)
    {
   
        if($request->ajax()){
            //return 'getRequest has loaded completely'.$id; 
            $municipios = Municipio::municipios($id);
            return response()->json($municipios);
        }

    }

    public function getParroquias(Request $request, $id)
    {
        
        if($request->ajax()){
            
            $parroquias = Parroquia::parroquias($id);
            return response()->json($parroquias);
        }

    }





}
