<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PSTPagoFacil\SignatureHelper;
use GuzzleHttp\Client;
use PSTPagoFacil\ApiClient\Model\RequestBodyTrx;
use PSTPagoFacil\ApiClient\Api\AuthApi;
use Ixudra\Curl\Facades\Curl;
use Symfony\Component\Dotenv\Dotenv;
use PSTPagoFacil\ApiClient\Api\TrxsApi;
use PSTPagoFacil\ApiClient\Model\LoginBody;

use App\Ventas;


class PagofacilController extends Controller
{

    public function callback(Request $request){
	  $input = $request->all();
	  dd($input);
	}

	public function end(Request $request){
		$input = $request->all();
		$amount = $request['x_amount'];
		$registroVenta = Ventas::all()->last();
		$registroVenta->estado = $request['x_result'];

		$registroVenta->save();

		return redirect()->route('final');
	}
}
