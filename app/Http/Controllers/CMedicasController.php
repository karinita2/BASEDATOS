<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CMedica;
use Laracasts\Flash\Flash;
use App\Http\Requests\CMedicaRequest;

class CMedicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c_medicas = Cmedica::orderBy('id', 'ASC')->paginate(5);
        return view('config.c_medicas.index')->with('c_medicas', $c_medicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.c_medicas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c_medica = new CMedica($request->all());
        $c_medica->save();

        Flash::success("Se ha registrado la condición médica: ".$c_medica->c_medica );
       
        return redirect()->route('config.c_medicas.index');
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
        $c_medica = CMedica::find($id);
        return view('config.c_medicas.edit')->with('c_medica',$c_medica);
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
        $c_medica = CMedica::find($id);
        $c_medica->fill($request->all());
        $c_medica->save();
        Flash::success("Se ha editado: ".$c_medica->c_medica );
        return redirect()->route('config.c_medicas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c_medica = CMedica::find($id);
        $c_medica->delete();

        Flash::error("Se ha eliminado: ".$c_medica->c_medica );

        return redirect()->route('config.c_medicas.index');
    }
}
