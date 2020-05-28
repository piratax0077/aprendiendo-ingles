<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;
use App\Ventas;

class ModuloController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function elementary(){

        $modulos = Cursos::all();

    	return view('modulos.elementary',[
            'modulos' => $modulos
        ]);
    }

    public function preliminary(){

        $modulos = Cursos::all();

    	return view('modulos.preliminary',[
            'modulos' => $modulos
        ]);
    }

    public function higher(){

        $modulos = Cursos::all();

    	return view('modulos.higher',[
            'modulos' => $modulos
        ]);
    }

    public function vision(){
    	return view('vision');
    }
    public function mision(){
        return view('mision');
    }
}
