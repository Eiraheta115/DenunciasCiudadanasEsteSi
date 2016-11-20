<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';
    protected $primaryKey = 'id_municipio';
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'nombre_municipio', 
    ];

    public function departamento(){
    	return $this->belongsTo('App\Departamento',' ','id_departamento');
    }

    public function rdenuncias(){
        return $this->hasMany('App\Denuncia','id_municipio','id_denuncia');
    }*/
}
