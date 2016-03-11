<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Filial;
use Laracasts\Flash\Flash;
use App\Http\Requests\FilialRequest;

class FilialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->filial);
        $filiales = Filial::search($request->filial)->orderBy('id', 'ASC')->paginate(5);
        return view('config.filiales.index')->with('filiales', $filiales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('config.filiales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilialRequest $request)
    {
        $filial = new Filial($request->all());
        $filial->save();

        Flash::success("Se ha registrado la filial: ".$filial->filial );
       
        return redirect()->route('config.filiales.index');
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
        $filial = Filial::find($id);
        return view('config.filiales.edit')->with('filial',$filial);
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
        $filial = Filial::find($id);
        $filial->fill($request->all());
        $filial->save();
        Flash::success("Se ha editado: ".$filial->filial );
        return redirect()->route('config.filiales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filial = Filial::find($id);
        $filial->delete();

        Flash::error("Se ha eliminado: ".$filial->filial );

        return redirect()->route('config.filiales.index');
    }
}
