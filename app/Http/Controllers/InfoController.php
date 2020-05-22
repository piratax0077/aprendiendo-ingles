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

    public function datos($id){
        if($id == 1){
            $titulo = "El ingles es un idioma universal";
            $descripcion ="CON MAYOR CANTIDAD DE HABLANTES NO NATIVOS, 1.5 BILLONES DE PERSONAS (SEGUNDA LENGUA)  Y PREVALECE  EN LA CANTIDAD DE PUBLICACIONES DE   INVESTIGACIONES CIENTÍFICAS, LIBROS,  E INTERNET.";
            return view('datos',[
                'titulo' => $titulo,
                'descripcion' => $descripcion]);
        }elseif ($id == 2) {
            $titulo = "Como afecta no hablar ingles";
            $descripcion = "ESTOS  RESULTADOS SON DESALENTADORES, SOLO EL 32 % DE LOS ESTUDIANTES DE ENSEÑANZA  MEDIA, LOGRAN O SUPERAN EL NIVEL   BÁSICO  A2.  NIVEL LOGRADO 3 DE 10 ESTUDIANTES. ESTE BAJO NIVEL DE INGLÉS  PREVIO  A LOS ESTUDIOS SUPERIORES,  SE VEN AFECTADOS POR EL CAMBIO DE METODOLOGÍA  Y TERMINAN TITULÁNDOSE   SIN HABLAR INGLÉS DE MANERA  EFECTIVA.";
            return view('datos',[
                'titulo' => $titulo,
                'descripcion' =>$descripcion]);
        }elseif ($id == 3) {
            $titulo = "Responsabilidad social";
            $descripcion = "CON UNA FIRME CONVICCIÓN Y CONSCIENTES DE NUESTRA RESPONSABILIDAD SOCIAL, QUEREMOS  PONER AL ALCANCE  DE LA COMUNIDAD EN GENERAL, BENEFICIOS  PREFERENCIALES  CON     BECAS 100%  Y SUBVENCIONES  75%,  PARA  QUE  DE ESTA FORMA  LOS ESTUDIANTES SE COMUNIQUEN   UTILIZANDO EL IDIOMA INGLÉS  COMO UNA HERRAMIENTA ALTAMENTE COMPETITIVA, FUNDAMENTAL PARA GENERAR MÁS Y MEJORES OPORTUNIDADES.";
            return view('datos',[
                'titulo' => $titulo,
                'descripcion' =>$descripcion]);
        }elseif($id == 4){
            $titulo = "Precio subvención preferencial";
            $descripcion ="UN ELEMENTO DE DIFERENCIACIÓN, DEL PRECIO  REAL $300.000.PRECIO  SUBVENCIÓN PREFERENCIAL 75%    MATRICULA $ 49.900";
            return view('datos',[
                'titulo' => $titulo,
                'descripcion' =>$descripcion
            ]);
        }
    }
}
