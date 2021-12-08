<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $texto=trim($request->get('texto'));
        $productos=DB::table('productos')
        ->select('id','nombre','cantidad','precio','proveedor')
        ->where('proveedor', 'LIKE','%'.$texto.'%')
        ->orWhere('nombre', 'LIKE','%'.$texto.'%')
        ->orderBy('nombre', 'asc')
        ->paginate(10);
        return view('productos.index', compact('productos','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Producto;
        $productos->nombre=$request->input('nombre');
        $productos->cantidad=$request->input('cantidad');
        $productos->precio=$request->input('precio');
        $productos->proveedor=$request->input('proveedor');
        $productos->save();
        return redirect()->route('productos.index');
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
        $productos=Producto::FindOrFail($id);
        return view('productos.edit', compact('productos'));
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
        $productos=Producto::FindOrFail($id);
        $productos->nombre=$request->input('nombre');
        $productos->cantidad=$request->input('cantidad');
        $productos->precio=$request->input('precio');
        $productos->proveedor=$request->input('proveedor');
        $productos->save();
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos=Producto::FindOrFail($id);
        $productos->delete();
        return redirect()->route('productos.index');
    }
}
