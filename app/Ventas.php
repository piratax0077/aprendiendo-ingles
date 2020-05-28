<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
	public $timestamps = true;
    protected $table = 'ventas';

    public function curso(){
    	return $this->belongsTo('App\Cursos','idCurso');
    }

    // Relación de Muchos a Uno
	public function user(){
		return $this->belongsTo('App\User', 'idUser');
	}
}
