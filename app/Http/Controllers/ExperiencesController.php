<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Experiences;

class ExperiencesController extends Controller
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
        $experiences = Experiences::paginate();
        return view('experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $experiences = new Experiences();
        return view('experience.create', compact('experiences'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Experiences::create([
            'img-fontawesome' => $request->input('img-fontawesome'),
            'titulo' => $request->input('titulo'),
            'descripcion' => $request->input('descripcion'),
            'color' => $request->input('color'),
        ]);
        return view('/experience')->with('mensaje', 'creacion exitosa');
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
        $experiences = Experiences::findOrFail($id);
        return view('experience.edit', compact('experiences'));        
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
        $experiences = experiences::findOrFail($id);
        $experiences->update([
            'image_fontawesome' => $request->input('image_fontawesome'),
            'titulo' => $request->input('titulo'),
            'descripcion' => $request->input('descripcion'),
            'color' => $request->input('color'),
        ]);

        return view('/experience')->with('mensaje', 'Actualizacion exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Experiences::destroy($id);
        return redirect('/experience')->with('mensaje', 'eliminado');
    }
}
