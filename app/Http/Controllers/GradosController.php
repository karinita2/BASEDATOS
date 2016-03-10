<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Grado;
use Laracasts\Flash\Flash;
use App\Http\Requests\GradoRequest;

class GradosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grados = Grado::orderBy('id', 'ASC')->paginate(5);
        return view('config.grados.index')->with('grados', $grados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('config.grados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GradoRequest $request)
    {
        $grado = new Grado($request->all());
        $grado->save();

        Flash::success("Se ha registrado el grado ".$grado->institucion );
       
        return redirect()->route('config.grados.index');
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
         $grado = Grado::find($id);
         return view('config.grados.edit')->with('grado',$grado);
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
        $grado = Grado::find($id);
        $grado->fill($request->all());
        $grado->save();
        Flash::success("Se ha editado ".$grado->grado );
        return redirect()->route('config.grados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grado = Grado::find($id);
        $grado->delete();

        Flash::error("Se ha eliminado ".$grado->grado );

        return redirect()->route('config.grados.index');
    }
}
