<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Seccion;
use Laracasts\Flash\Flash;
use App\Http\Requests\SeccionRequest;



class SeccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secciones = Seccion::orderBy('id', 'ASC')->paginate(5);
        return view('config.secciones.index')->with('secciones', $secciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.secciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeccionRequest $request)
    {
        $seccion = new Seccion($request->all());
        $seccion->save();

        Flash::success("Se ha registrado la sección: ".$seccion->seccion );
       
        return redirect()->route('config.secciones.index');
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
         $seccion = Seccion::find($id);
         return view('config.secciones.edit')->with('seccion',$seccion);
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
        $seccion = Seccion::find($id);
        $seccion->fill($request->all());
        $seccion->save();
        Flash::success("Se ha editado ".$seccion->seccion );
        return redirect()->route('config.secciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seccion = Seccion::find($id);
        $seccion->delete();
        Flash::error("Se ha eliminado ".$seccion->seccion );
        return redirect()->route('config.secciones.index');
    }
}
