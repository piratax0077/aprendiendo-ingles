<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
    	
    	return view('info');
    }

    public function home(){
    	return view('home');
    }

    public function howWork(){
    	return view('howWork');
    }

    public function finalidad(){
        return view('finalidad');
    }

    public function confirmarPago($id){

        if($id == 1){
            $titulo = "Elementary";
            $precio = 100;
            $nivel = "Básico";

        }elseif ($id == 2) {
            $titulo = "Preliminary";
            $precio = 200;
            $nivel = "Intermedio";
        }else{
            $titulo = "Higher";
            $precio = 300;
            $nivel = "Profesional";
        }

        return view('confirmar-pago',[
            'id' => $id,
            'titulo' => $titulo,
            'precio' => $precio,
            'nivel' => $nivel
        ]);
        
    }

   public function inglesIdiomaUniversal(){
        return view('datos.ingles-idioma-universal');
   }

   public function comoAfecta(){
    return view('datos.como-afecta');
   }

   public function social(){
    return view('datos.responsabilidad-social');
   }

   public function subvencion(){
    return view('datos.subvencion');
   }
}
