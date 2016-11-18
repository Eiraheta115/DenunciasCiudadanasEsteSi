<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acontecimiento extends Model
{
    
    protected $table = 'acontecimientos' ;
    protected $primaryKey = 'id_acontecimiento';
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'nombre_acontecimiento', 
    ];

    public function rdenuncias(){
        return $this->hasMany('App\Denuncia','id_acontecimiento','id_denuncia');
    }

    public function entidad(){
        return $this->belongsTo('App\Entidad',' ','id_entidad');
    }*/
}
