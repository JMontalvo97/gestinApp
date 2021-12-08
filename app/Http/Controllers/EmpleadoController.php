<?php

namespace App\Http\Controllers;

use App\Models\empleadomodelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $texto=trim($request->get('texto'));
        $empleados=DB::table('empleados')
        ->select('id','nombres','apellidos','curp','celular','edad')
        ->where('apellidos', 'LIKE','%'.$texto.'%')
        ->orWhere('nombres', 'LIKE','%'.$texto.'%')
        ->orderBy('nombres', 'asc')
        ->paginate(10);
        return view('empleados.index', compact('empleados','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new empleadomodelo;
        $empleado->nombres=$request->input('nombres');
        $empleado->apellidos=$request->input('apellidos');
        $empleado->curp=$request->input('curp');
        $empleado->celular=$request->input('celular');
        $empleado->edad=$request->input('edad');
        $empleado->save();
        return redirect()->route('empleado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nombremodelo  $nombremodelo
     * @return \Illuminate\Http\Response
     */
    public function show(nombremodelo $nombremodelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nombremodelo  $nombremodelo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado=empleadomodelo::FindOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nombremodelo  $nombremodelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado=empleadomodelo::FindOrFail($id);
        $empleado->nombres=$request->input('nombres');
        $empleado->apellidos=$request->input('apellidos');
        $empleado->curp=$request->input('curp');
        $empleado->edad=$request->input('edad');
        $empleado->celular=$request->input('celular');
        $empleado->save();
        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nombremodelo  $nombremodelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado=empleadomodelo::FindOrFail($id);
        $empleado->delete();
        return redirect()->route('empleado.index');
    }
}
