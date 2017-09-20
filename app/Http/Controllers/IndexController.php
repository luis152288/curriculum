<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Index;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Index::paginate();
        return view('index.index', compact('index'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $index = new Index();
        return view('index.create', compact('index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $file_route = null;

        $this->validate($request,[
            'imagen' => 'image|mimes:jpg,jpeg,png',
            ]);

        if($request->file('imagen')){
            //capturando imagen
            $img = $request->file('imagen');
            //obtener nombre
            $file_route = $img->getClientOriginalName();
            //almacenamiento
            Storage::disk('imagenes')->put($file_route,file_get_contents($img->getRealPath()));

        }else{
        $file_route= "no-disponible.png";
    }
        Index::create([
            'imagen' => $file_route,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return redirect('/index')->with('mensaje', 'creacion exitosa');
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
        $index = Index::findOrFail($id);
        return view('index.edit', compact('index'));
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
        $file_route = null;

        $this->validate($request,[
            'imagen' => 'image|mimes:jpg,jpeg,png',
            ]);

        if ($request->file('imagen')) {
            #captura de imagen
            $img = $request->file('imagen');
            #optener nombre de archivo
            $file_route = $img->getClientOriginalName();
            #alamcenar imagen
            Storage::disk('imagenes')->put($file_route,file_get_contents($img->getRealPath()));

        }else{
            $file_route = "no-disponible.png";
        }

        $index = Index::findOrFail($id);
        $index->update([
            'imagen' => $file_route,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            ]);

        return redirect('/index')->with('mensaje', 'cambios efectuados exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Index::destroy($id);
        return redirect('/index')->with('mensaje', 'eliminado');
    }
}
