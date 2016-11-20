<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $primaryKey = 'id_departamento';
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'nombre_departamento', 
    ];

    public function municipios(){
    	return $this->hasMany('App\Municipio','id_departamento',' id_municipio');
    }*/
}
