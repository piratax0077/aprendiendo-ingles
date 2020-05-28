<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Cursos;
use App\Ventas;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){

        $user = Auth::user();
        $id = $user->id;

        // Validación del formulario
        $validate = $this->validate($request, [
            'region' => 'required|string',
            'comuna' => 'required|string'
        ]);


        $valor = $request->input('valor');
        $region = $request->input('region');
        $comuna = $request->input('comuna');
        $idCurso = $request->input('idCurso');



        $idCursoInt = intval($idCurso);

        $valor_double = doubleval($valor);

        if ($region == "sin-region" || $comuna == "sin-comuna") {

        return redirect()->route('confirmarPago',['id' => $idCursoInt])->with(['message' => '¡ Error ! Debe seleccionar una región y una comuna asociada']);
            
        }else{
            $venta = new Ventas();

            $venta->idCurso = $idCursoInt;
            $venta->idUser = $id;
            $venta->valor = $valor_double;
            $venta->region = $region;
            $venta->comuna = $comuna;

            $venta->save();

            if ($venta) {

                return view('info',[
                'nombre' => $user->name,
                'apellido' => $user->surname,
                'email' => $user->email,
                'valor' => $valor_double,
                'region' => $region,
                'comuna' => $comuna
            ]);

        }
        }

    }

    public function home(){
    	return view('home');
    }

    public function howWork(){
        $modulos = Cursos::all();

    	return view('howWork',[
            'modulos' => $modulos
        ]);
    }

    public function finalidad(){
        return view('finalidad');
    }

    public function confirmarPago($id){
 

        $id_int = intval($id);

        $curso = Cursos::where('id',$id_int)->first();

        return view('confirmar-pago',[
            'id' => $curso->id,
            'titulo' => $curso->nombreCurso,
            'precio' => $curso->valor,
            'nivel' => $curso->nivel
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

   public function online(){
    return view('metodologia-online');
   }

   public function nemotecnica(){
    return view('metodologia-nemotecnica');
   }

   public function ventajas(){
    return view('ventajas');
   }

   public function misCursos($id){
        $user = Auth::User();
        $misVentas = Ventas::where('idUser',$id)->orderBy('id', 'desc')->get();

        return view('user.mis-cursos',[
            'id' => $id,
            'misVentas' => $misVentas
        ]); 
   }

   public function detalleVenta($id){
        $miVenta = Ventas::find($id);
        return view('user.detalle-venta',[
            'miVenta' => $miVenta
        ]);
   }
}
