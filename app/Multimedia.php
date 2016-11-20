<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected $table = 'multimedias';
    protected $primaryKey = 'id_multimedia';
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_multimedia', 
        'latitud', 
        'longitud', 
        'fecha_multimedia', 
        'tipo_multimedia',
        'id_denuncia', 
    ];

    /*public function rdenuncia(){
    	return $this->belongsTo('App\Denuncia',' ','id_denuncia');
    }*/
}

