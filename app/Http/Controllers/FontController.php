<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class FontController extends Controller
{
    public function index(){
		if(Auth::guest()){
			return view('index');
		}else{
			return view('home');
		}
		
	}
	public function login(){
		return view('login');
	}
	public function register(){
		return view('register');
	}
	public function ayuda(){
		return view('ayuda');
	}
	public function denuncias(){
        return view('denuncias');
    }
}
