<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $fillable = [ 'imagen', 'titulo', 'subtitulo' , 'descripcion', 'tag1' , 'tag2' , 'tag3' , 'nombre1', 'nombre2', 'nombre3', 'cliente' ];
}
