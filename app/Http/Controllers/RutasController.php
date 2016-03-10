<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ruta;
use Laracasts\Flash\Flash;
use App\Http\Requests\RutaRequest;

class RutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rutas = Ruta::orderBy('id', 'ASC')->paginate(5);
        return view('config.rutas.index')->with('rutas', $rutas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.rutas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RutaRequest $request)
    {
        $ruta = new Ruta($request->all());
        $ruta->save();

        Flash::success("Se ha registrado la ruta: ".$ruta->ruta );
   
        return redirect()->route('config.rutas.index');
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
        $ruta = Ruta::find($id);
         return view('config.rutas.edit')->with('ruta',$ruta);
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
        $ruta = Ruta::find($id);
        $ruta->fill($request->all());
        $ruta->save();
        Flash::success("Se ha editado ".$ruta->ruta );
        return redirect()->route('config.rutas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruta = Ruta::find($id);
        $ruta->delete();
        Flash::error("Se ha eliminado ".$ruta->ruta );
        return redirect()->route('config.rutas.index');
    }
}
