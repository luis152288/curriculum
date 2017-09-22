<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
	protected $table = "experiences";
    protected $fillable = [ 'img', 'titulo', 'descripcion', 'color', 'fondo' ];
}
