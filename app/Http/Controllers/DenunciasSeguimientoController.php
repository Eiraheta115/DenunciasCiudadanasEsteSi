<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DenunciasSeguimientoController extends Controller
{
    //Controlador que gestiona la bandeja de entrada de las denuncias con sus respectivas
    //Entidades y rol de usuario

    public function index(){

        return view('bandeja_denuncias');
    }
}
