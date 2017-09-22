<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Index;
use App\Experiences;
use App\Works;

class FrontendController extends Controller
{
    public function index()
    {
        $index = Index::get();
        $about = About::get();
        $experiences = Experiences::get();
        $works = Works::get();
        return view('welcome', compact('index','about','experiences','works'));
    }
}
