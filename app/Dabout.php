<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dabout extends Model
{
	protected $table = "dabouts";
    protected $fillable = [ 'descripcion' ];
}
