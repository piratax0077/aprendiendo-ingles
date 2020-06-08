<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Transbank\Webpay\Configuration;
use Transbank\Webpay\Webpay;
// ...


class Transaccion extends Model
{
	public function transbank(){
		return $transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
               ->getNormalTransaction();
	}
    
}
