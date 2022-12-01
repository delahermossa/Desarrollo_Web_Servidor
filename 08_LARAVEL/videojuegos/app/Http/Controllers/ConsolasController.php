<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consola;

class ConsolasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consolas=Consola::all();

        $mensaje='Esto es la lista de consolas';
      
        //Aquí iría la lógica del método
        return view('consolas/index',[
            'mensaje'=>$mensaje,
            'consolas'=>$consolas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('consolas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $consola=new Consola;
        $consola->nombre=$request->input('nombre');
        $consola->ano_salida=$request->input('ano_salida');
        $consola->generacion=$request->input('generacion');
        $consola->descripcion=$request->input('descripcion');

        $consola->save();

        return redirect('consolas');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
