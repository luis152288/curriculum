<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Works;

class WorksController extends Controller
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
        $works = Works::paginate();
        return view('works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $works= new Works();
        return view('works.create',compact('works'));
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

    Works::create([
        'imagen' => $file_route,
        'titulo' => $request->input('titulo'),
        'subtitulo' => $request->input('subtitulo'),
        'descripcion' => $request->input('descripcion'),
        'tag1' => $request->input('tag1'),
        'tag2' => $request->input('tag2'),
        'tag3' => $request->input('tag3'),
        'nombre1' => $request->input('nombre1'),
        'nombre2' => $request->input('nombre2'),
        'nombre3' => $request->input('nombre3'),
        'cliente' => $request->input('cliente'),
        ]);

        return redirect('/works')->with('mensaje', 'creacion exitosa');
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
        $works = Works::findOrFail($id);
        return view('works.edit', compact('works'));
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
        
        $works = Works::findOrFail($id);
        $works->update([
            'imagen' => $file_route,
            'titulo' => $request->input('titulo'),
            'subtitulo' => $request->input('subtitulo'),
            'descripcion' => $request->input('descripcion'),
            'tag1' => $request->input('tag1'),
            'tag2' => $request->input('tag2'),
            'tag3' => $request->input('tag3'),
            'nombre1' => $request->input('nombre1'),
            'nombre2' => $request->input('nombre2'),
            'nombre3' => $request->input('nombre3'),
            'cliente' => $request->input('cliente'),
            ]);

        return redirect('/works')->with('mensaje', 'cambios efectuados exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Works::destroy($id);
        return redirect('/works')->with('mensaje', 'eliminado');
    }
}
