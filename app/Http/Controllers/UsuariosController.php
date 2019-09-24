<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
    	return view('usuarios',[
    		'texto'=>'Lista de usuários',
    		'checagem' => true,
    		'usuarios' => ['usuario1','usuario2','usuario3','usuario4']

    	]);
    }
}
