<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $videojuegos=Videojuego::all(); //Esto hace un select de la tabla videojuegos


        //Crear un array bidimensional de videojuegos
        //titulo, precio, pegi, descripcion
        
        /*$videojuegos=[
            ["Super mario",5,16,"Juego Super mario"],
            ["God of War",25,18,"Juego God of War"],
            ["Okami",40,12,"Juego Okami"]

        ];*/
        $mensaje= "Aquí tenemos un listado de videojuegos";

        return view('videojuegos/index',[
            'mensaje'=>$mensaje,
            'videojuegos'=>$videojuegos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videojuegos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //este método va a recibir la informacióny la va a insertar en la bd

        $videojuego=new Videojuego;
        $videojuego->titulo=$request->input('titulo');
        $videojuego->precio=$request->input('precio');
        $videojuego->pegi=$request->input('pegi');
        $videojuego->descripcion=$request->input('descripcion');
        $videojuego->save();

        return redirect('videojuegos');



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
