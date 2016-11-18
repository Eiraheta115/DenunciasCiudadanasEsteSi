<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoDenuncia extends Model
{
    
    protected $table = 'estado_denuncias';
    protected $primaryKey = 'id_estado';
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'nombre_estado', 'descripcion_estado', 
    ];

    public function rdenuncias(){
    	return $this->hasMany('App\Denuncia','id_estado','id_denuncia');
    }*/
}
