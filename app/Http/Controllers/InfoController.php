<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

use PSTPagoFacil\ApiClient\Api\TrxsApi;
use PSTPagoFacil\ApiClient\Model\RequestBodyTrx;
use PSTPagoFacil\SignatureHelper;
use Ixudra\Curl\Facades\Curl;
use App\Cursos;
use App\Ventas;
use App\Transaccion;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){

      $user = Auth::user();
      $id = $user->id;

      $idModulo = $request->input('idModulo');
      $amount = $request->input('amount');
      $region = $request->input('region');
      $comuna = $request->input('comuna');


      $idModuloInt = intval($idModulo);
      $amountDouble = doubleval($amount);

      

      if ($region == "sin-region" || $comuna == "sin-comuna") {

        return redirect()->route('confirmarPago',['id' => $idModuloInt])->with(['message' => '¡ Error ! Debe seleccionar una región y una comuna asociada']);
            
        }else{
            $venta = new Ventas();

            $venta->idCurso = $idModuloInt;
            $venta->idUser = $id;
            $venta->valor = $amountDouble;
            $venta->region = $region;
            $venta->comuna = $comuna;
            $venta->estado = "PENDIENTE";

            $venta->save();

            if ($venta) {

              //Realizar transacción en estado pendiente

                $tokenService = env('TOKEN_SERVICE');
                $tokenSecret = env('TOKEN_SECRET');

                $sHelper = new SignatureHelper($tokenSecret);

                $x_reference = (int) microtime(true); //Just a random number as an example 
                $x_session_id = (int) microtime(true); //Just a random number as an example 

                $trxBody = [
                    "x_account_id"=> $tokenService,
                    "x_amount"=> $amountDouble,
                    "x_currency"=> "CLP",
                    "x_reference"=> $x_reference,
                    "x_customer_email"=> $user->email,
                     "x_url_complete"=> "https://postman-echo.com/post",
                    "x_url_cancel"=> "https://postman-echo.com/post",
                    "x_url_callback"=> "https://aprendiendo-pagofacil.com.devel/callback",
                     "x_shop_country"=> "CL",
                    "x_session_id"=> "$x_session_id"
                ];

                $x_signature = $sHelper->signPayload($trxBody);
                $trxBody["x_signature"] = $x_signature;

                $response = Curl::to('https://apis.pgf.cl/trxs')
                            ->withData($trxBody)
                            ->asJson()
                            ->post();

                  $urlPago = $response->data->payUrl[0]->url;

                return view('info',[
                'url' => $urlPago
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

   public function doQuiz(){
    $user = Auth::user();
    return view('user.quiz',['user' => $user]);
   }

   public function resultadoQuiz($response){
    
   }

public function getContract(){
  $ultima_venta = Ventas::all()->last();

  return view('user.contract',['venta' => $ultima_venta]);
}
}
