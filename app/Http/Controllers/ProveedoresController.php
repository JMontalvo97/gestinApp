<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proveedores;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $texto=trim($request->get('texto'));
        $proveedores=DB::table('proveedores')
        ->select('id','nombre','rfc','celular','direccion')
        ->where('rfc', 'LIKE','%'.$texto.'%')
        ->orWhere('nombre', 'LIKE','%'.$texto.'%')
        ->orderBy('nombre', 'asc')
        ->paginate(10);
        return view('proveedores.index', compact('proveedores','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedores;
        $proveedor->nombre=$request->input('nombre');
        $proveedor->rfc=$request->input('rfc');
        $proveedor->celular=$request->input('celular');
        $proveedor->direccion=$request->input('direccion');
        $proveedor->save();
        return redirect()->route('proveedores.index');
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
        $proveedores=Proveedores::FindOrFail($id);
        return view('proveedores.edit', compact('proveedores'));
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
        $proveedores=Proveedores::FindOrFail($id);
        $proveedores->nombre=$request->input('nombre');
        $proveedores->rfc=$request->input('rfc');
        $proveedores->celular=$request->input('celular');
        $proveedores->direccion=$request->input('direccion');
        $proveedores->save();
        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedores=Proveedores::FindOrFail($id);
        $proveedores->delete();
        return redirect()->route('proveedores.index');
    }
}
