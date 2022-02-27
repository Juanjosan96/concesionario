<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Coche;
class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coches=Coche::paginate();   
        return view('coche.index',compact('coches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coche.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=new Coche();

        $datos->nombre=$request->nombre;  //añadir las demas categorias aqui
        $datos->marca=$request->marca;
        $datos->modelo=$request->modelo;
        $datos->anio=$request->anio;
        $datos->matricula=$request->matricula;
        $datos->color=$request->color;
        $datos->descripcion=$request->descripcion;
        $datos->imagen=$request->imagen;
        // if($imagen=$request->file('imagen')){

        //     $ruta='imagen/';
           
        // }
        // return $coche;
        // return $request->all();
        // $cocha =Coche::orderby('nombre')->get();
        // $cocha->push();
        $datos->save();
        return redirect()->route('coche.show',$datos);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Coche $datos)
    {
            
        
        return view('coche.show',compact('datos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coche $datos)
    {
        return view('coche.edit',compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request,Coche $datos)
    
    {
        $datos->nombre=$request->nombre;  //añadir las demas categorias aqui
        $datos->marca=$request->marca;
        $datos->modelo=$request->modelo;
        $datos->anio=$request->anio;
        $datos->matricula=$request->matricula;
        $datos->color=$request->color;
        $datos->descripcion=$request->descripcion;
        $datos->imagen=$request->imagen;
       $datos->save();
       return redirect()->route('coche.show',$datos);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coche $datos)
    {
        $datos->delete();
       return redirect()->route('coche.index');

    }
}
