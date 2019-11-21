<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        $data = $input->all();
        if(strlen(trim($data['password']))>0){
          
          $data['password'] = bcrypt($data['password']);
        }else{
          unset($data['password']);
        }

        $user = User::findOrFail($id)->update($data);
        $user = User::find($id);
        if($user->confirmed===true){
          Mail::send('emails.liberado', $user->toArray(), function($message) use ($user)
          {
              $message->to($user->email, 'contato@allankardec.online')
                      ->subject('Cadastro liberado!');
          });
        }

        return redirect()->route('usuarios.index');
    }

    public function destroy($id){
        
        $user = User::findOrFail($id)->delete();
        return redirect()->route('usuarios.index');
    }
}
