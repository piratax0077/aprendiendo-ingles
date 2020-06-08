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


class PagofacilController extends Controller
{
    public function transaccion(Request $request){

    	
    	$email = $request->input('email');
    	$amount = intval($request->input('valor'));

    }

    public function getData(){

    	$apiInstance = new TrxsApi();

    	$request_body_trx = new RequestBodyTrx();


    	$tokenService = env('TOKEN_SERVICE');
    	
		$tokenSecret = env('TOKEN_SECRET');
		
    	$sHelper = new SignatureHelper($tokenSecret);

		$x_reference = (int) microtime(true); //Just a random number as an example 
		$x_session_id = (int) microtime(true); //Just a random number as an example 

		$trxBody = [
		    "x_account_id"=> $tokenService,
		    "x_amount"=> 1000,
		    "x_currency"=> "CLP",
		    "x_reference"=> $x_reference,
		    "x_customer_email"=> 'francisco.rojo.gallardo@gmail.com',
		    "x_url_complete"=> "https://apis-dev.pgf.cl/trxs",
		    "x_url_cancel"=> "https://apis-dev.pgf.cl/trxs",
		    "x_url_callback"=> "https://apis-dev.pgf.cl/trxs",
		    "x_shop_country"=> "CL",
		    "x_session_id"=> "$x_session_id"
		];

		$x_signature = $sHelper->signPayload($trxBody);
		$trxBody["x_signature"] = $x_signature;
			
		$request_body_trx = new RequestBodyTrx($trxBody);
	
    	$response = Curl::to('https://apis-dev.pgf.cl/trxs')
                            ->withData($request_body_trx)
                            ->asJson()
                			->post();
        dd($response);
    }
}
