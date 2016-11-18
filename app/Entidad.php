<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = 'entidades';
    protected $primaryKey = 'id_entidad';
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'nombre_entidad', 
    ];

    public function acontecimientos(){
    	return $this->hasMany('App\Acontecimiento','id_entidad','id_acontecimiento');
    }

    public function rdenuncias(){
        return $this->hasMany('App\Denuncia','id_entidad','id_denuncia');
    }
 
    public function users(){
        return $this->hasMany('App\User','entidad','id_user');
    }*/

}
