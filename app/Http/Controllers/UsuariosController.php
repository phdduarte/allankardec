<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    public function index(){
      $users = User::orderBy('id', 'desc')->paginate(10);

      return view('usuarios',[
        'texto'=>'Lista de usuários',
        'checagem' => true,
        'users' => $users
      ]);
    }
    
    public function create()
    {
      return view('cadastro');
    }

    public function store(Request $request)
    {
      // validar 

        $user = User::create($request->all());

        return redirect()->route('usuarios.index');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }

    public function update($id){
        $input = request();
        
        $user = User::findOrFail($id)->update($input->all());

        return redirect()->route('usuarios.index');
    }

    public function destroy($id){
        
        $user = User::findOrFail($id)->delete();
        return redirect()->route('usuarios.index');
    }
}
