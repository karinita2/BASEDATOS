<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Talla;
use Laracasts\Flash\Flash;
use App\Http\Requests\TallaRequest;

class TallasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tallas = Talla::orderBy('id', 'ASC')->paginate(5);
        return view('config.tallas.index')->with('tallas', $tallas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.tallas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TallaRequest $request)
    {
        $talla = new Talla($request->all());
        $talla->save();

        Flash::success("Se ha registrado la talla: ".$talla->talla );
       
        return redirect()->route('config.tallas.index');
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
         $talla = Talla::find($id);
         return view('config.tallas.edit')->with('talla',$talla);
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
        $talla = Talla::find($id);
        $talla->fill($request->all());
        $talla->save();
        Flash::success("Se ha editado ".$talla->talla );
        return redirect()->route('config.tallas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $talla = Talla::find($id);
        $talla->delete();
        Flash::error("Se ha eliminado ".$talla->talla );
        return redirect()->route('config.tallas.index');
    }
}
