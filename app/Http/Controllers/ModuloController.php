<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function elementary(){
    	return view('modulos.elementary');
    }

    public function preliminary(){
    	return view('modulos.preliminary');
    }

    public function higher(){
    	return view('modulos.higher');
    }

    public function vision(){
    	return view('vision');
    }
    public function mision(){
        return view('mision');
    }
}
