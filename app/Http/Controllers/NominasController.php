<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Nomina;
use Laracasts\Flash\Flash;
use App\Http\Requests\NominaRequest;

class NominasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nominas = Nomina::orderBy('id', 'ASC')->paginate(5);
        return view('config.nominas.index')->with('nominas', $nominas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('config.nominas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nomina = new Nomina($request->all());
        $nomina->save();

        Flash::success("Se ha registrado la condición médica: ".$nomina->nomina );
       
        return redirect()->route('config.nominas.index');
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
         $nomina = Nomina::find($id);
         return view('config.nominas.edit')->with('nomina',$nomina);
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
        $nomina = Nomina::find($id);
        $nomina->fill($request->all());
        $nomina->save();
        Flash::success("Se ha editado: ".$nomina->nomina );
        return redirect()->route('config.nominas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nomina = Nomina::find($id);
        $nomina->delete();

        Flash::error("Se ha eliminado: ".$nomina->nomina );

        return redirect()->route('config.nominas.index');
    }
}
