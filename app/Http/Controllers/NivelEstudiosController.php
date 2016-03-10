<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\NivelEstudio;
use Laracasts\Flash\Flash;
use App\Http\Requests\NivelEstudioRequest;

class NivelEstudiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nivel_estudios = NivelEstudio::orderBy('id', 'ASC')->paginate(5);
        return view('config.nivel_estudios.index')->with('nivel_estudios', $nivel_estudios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('config.nivel_estudios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NivelEstudioRequest $request)
    {
        
        $nivel_estudio = new NivelEstudio($request->all());
        $nivel_estudio->save();

        Flash::success("Se ha registrado el nivel de estudio: ".$nivel_estudio->nivel );
   
        return redirect()->route('config.nivel_estudios.index');
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
         $nivel_estudio = NivelEstudio::find($id);
         return view('config.nivel_estudios.edit')->with('nivel_estudio',$nivel_estudio);
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
        $nivel_estudio = NivelEstudio::find($id);
        $nivel_estudio->fill($request->all());
        $nivel_estudio->save();
        Flash::success("Se ha editado ".$nivel_estudio->nivel );
        return redirect()->route('config.nivel_estudios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nivel_estudio = NivelEstudio::find($id);
        $nivel_estudio->delete();
        Flash::error("Se ha eliminado ".$nivel_estudio->nivel );
        return redirect()->route('config.nivel_estudios.index');
    }
}
