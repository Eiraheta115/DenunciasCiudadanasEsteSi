<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model {
    
    protected $table = 'denuncias';
    protected $primaryKey = 'id_denuncia';

    /*public function user(){
    	return $this->belongsTo('App\User','id');//return $this->belongsTo('App\User',' ','id');
    }

    public function municipio(){
    	return $this->belongsTo('App\Municipio',' ','id_municipio');
    }

    public function entidad(){
    	return $this->belongsTo('App\Entidad',' ','id_entidad');
    }

    public function estadodenuncia(){
    	return $this->belongsTo('App\EstadoDenuncia',' ','id_estado');
    }

    public function acontecimiento(){
    	return $this->belongsTo('App\Acontecimiento',' ','id_acontecimiento');
    }

    public function multimedias(){
        return $this->hasMany('App\Multimedia','id_denuncia',' id_multimedia');
    }*/
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion_denuncia', 
        'fecha_hora',
        'id_user',
        'id_municipio',
        'id_entidad',
        'id_estado',
        'id_acontecimiento',


    ];
}
