<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
	public $timestamps = true;
    protected $table = 'cursos';

    //Relación One to Many / de uno a muchos
    
    public function ventas(){
    	return $this->hasMany('App\Ventas');
    }

}
