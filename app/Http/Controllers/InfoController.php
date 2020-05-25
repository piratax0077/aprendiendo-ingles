<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(Request $request){

        // Validación del formulario
        $validate = $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'region' => 'required|string',
            'comuna' => 'required|string'
        ]);

    	
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $email = $request->input('email');
        $valor = $request->input('valor');
        $region = $request->input('region');
        $comuna = $request->input('comuna');

        $valor_double = doubleval($valor);

if ($region == "sin-region" || $comuna == "sin-comuna") {
    return redirect()->route('home');
}

    	return view('info',[
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'valor' => $valor_double,
            'region' => $region,
            'comuna' => $comuna
        ]);
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
