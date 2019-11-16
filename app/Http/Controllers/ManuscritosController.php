<?php

namespace App\Http\Controllers;

use App\Manuscrito;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use File;
use Illuminate\Support\Facades\Auth;

class ManuscritosController extends Controller
{
    public $tipoManuscrito = ['Manuscrito', 'Cartas', 'Fotos', 'Jornais', 'Livros', 'Revistas'];

    public function index()
    {
        $user = auth()->user();
        
        if($user->type == 'admin'){ // se for admin vê todos os manuscritos
            $manuscritos = Manuscrito::with('user')->orderBy('data')->paginate(10);	
        }else{
            $manuscritos = Manuscrito::with('user')->where('user_id', $user->id)->orderBy('data')->paginate(10);	
        }
        
        return view('manuscritos.lista',['manuscritos' => $manuscritos]);
    }

    public function search(Request $request){
      $terms = $request->input('q');
      
      if(empty($terms)){
        return back()->with('erro','Erro: digite o que deseja buscar');        
      }
      
      $manuscritos = Manuscrito::where('codigo','like', '%'.$terms.'%')->paginate(12);
      if(count($manuscritos) == 0){
        
        $manuscritos = Manuscrito::where('titulo','like', "%$terms%")
                      ->orWhere('descricao','like',"%$terms%")
                      ->orWhere('proprietario','like',"%$terms%")
                      ->orWhere('data','like',"%$terms%")
                      ->orderBy('data')
                      ->paginate(12);
      }
      return view('manuscritos.tipo', ['manuscritos' => $manuscritos, 'tipo' => 'Pesquisa']); 
    }

    public function show($id)
    {
        $manuscrito = Manuscrito::findOrFail($id);
        
        return view('manuscritos.show', ['manuscrito' => $manuscrito]);
    }

    public function tipo($tipo='Manuscrito')
    {
      $pos = array_search(ucfirst($tipo), $this->tipoManuscrito);
      
      if($pos===false){
        return abort(400, 'Not found');
      }
      
      $manuscritos = Manuscrito::where('tipo', $pos)->orderBy('data')->paginate(12);

      return view('manuscritos.tipo', ['manuscritos' => $manuscritos, 'tipo' => ucfirst($tipo)]); 
    }

    public function links()
    {
      
      return view('manuscritos.links'); 
    }

    public function contato()
    {
      
      return view('manuscritos.contato'); 
    }

    public function sobre()
    {
      
      return view('manuscritos.sobre'); 
    }

    public function termos()
    {
      return view('manuscritos.termos'); 
    }

    public function glossario()
    {
      return view('manuscritos.glossario'); 
    }

    // public function mapadosite()
    // {
    //   return view('manuscritos.mapadosite'); 
    // }

    public function imprimir()
    {
      $manuscritos = Manuscrito::get();
      return view('welcome',['manuscritos' => $manuscritos]);   
    }

    public function novo()
    {
    	return view('manuscritos.formulario', ['tipoManuscrito' => $this->tipoManuscrito]);	
    }

    public function valida($request){
      
      if($request->file('pic')){
        $file = $request->file('pic');
        $extensao = $file->getClientOriginalExtension();  
        if($extensao != 'jpg' && $extensao != 'png')
        {
            return back()->with('erro','Erro: Este arquivo não é jpg nem png');

        }
      }

      if($request->file('pdf')){
        $file = $request->file('pdf');
        $extensao = $file->getClientOriginalExtension();  
        
        if(strtoupper($extensao) != 'PDF')
        {
            return back()->with('erro','Erro: Este arquivo não é pdf');

        }
      }

    }

    public function salvar(Request $request)
    {
      $this->valida($request);

      $validator = Validator::make($request->all(), [
        'codigo' => 'unique:manuscritos,codigo|max:25',
        'titulo' => 'required',
        'descricao' => 'required|max:255',
        'data' => 'required|date_format:d/m/Y',

      ]);
      
      
      if ($validator->fails()) {
          return back()->withErrors($validator)->withInput();
      }
      
      $user = auth()->user();
      $manuscrito = new Manuscrito;
      $manuscrito = $manuscrito->create($request->except('pic', 'pdf'));//retorna uma instancia do banco
      $manuscrito->user_id = $user->id;
      $manuscrito->save();

      if($request->file('pic'))
      {
          $file = $request->file('pic');
          $destinationPath = 'uploads';
          $name = uniqid(rand(), true).'.'.$file->getClientOriginalExtension();
          $file->move($destinationPath,$name);
          $old = $manuscrito->photo;
          $manuscrito->photo = $name;
          $manuscrito->save();
      }

      if($request->file('pdf'))
      {
          $file = $request->file('pdf');
          $destinationPath = 'uploads/pdf';
          $name = uniqid(rand(), true).'.'.$file->getClientOriginalExtension();
          $file->move($destinationPath,$name);
          $manuscrito->pdf = $name;
          $manuscrito->save();
      }

      \Session::flash('mensagem_sucesso','Manuscrito cadastrado com sucesso');
    	return Redirect::to('manuscritos/novo');
    }

    public function editar($id)
    {
        $user = auth()->user();
        
        if($user->type == 'admin'){ // se for admin vê todos os manuscritos
            $manuscrito = Manuscrito::findOrFail($id);
        }else{
            $manuscrito = Manuscrito::where('user_id', Auth::user()->id)->findOrFail($id);
        }
        
        
        return view('manuscritos.formulario',['manuscrito' => $manuscrito, 'tipoManuscrito' => $this->tipoManuscrito]);
    }

    public function atualizar($id, Request $request)
    {
      
      $validator = Validator::make($request->all(), [
        'codigo' => 'unique:manuscritos,codigo,'.$id.'|max:25',
        'titulo' => 'required',
        'descricao' => 'required|max:255',
        'data' => 'required|date_format:d/m/Y',

      ]);
      

      if ($validator->fails()) {
          return back()->withErrors($validator)->withInput();
      }
        $this->valida($request);

        

        $manuscrito = Manuscrito::findOrFail($id);
        $manuscrito->update($request->except('pic', 'pdf'));

        \Session::flash('mensagem_sucesso','Manuscrito atualizado com sucesso');
        
        if($request->file('pic'))
        {
            $destinationPath = 'uploads';
            $file = $request->file('pic');
            $name = uniqid(rand(), true).'.'.$file->getClientOriginalExtension();
            $file->move($destinationPath,$name);
            $manuscrito->photo = $name;
            $manuscrito->save();
        }
        if($request->file('pdf'))
        {
            $file = $request->file('pdf');
            $destinationPath = 'uploads/pdf';
            $name = uniqid(rand(), true).'.'.$file->getClientOriginalExtension();
            $file->move($destinationPath,$name);
            $manuscrito->pdf = $name;
            $manuscrito->save();
        }
        return Redirect::to('manuscritos/'.$manuscrito->id.'/editar');
    }

    public function deletar($id)
    {
        $manuscrito = Manuscrito::findOrFail($id);
        $manuscrito->delete();
        \Session::flash('mensagem_sucesso','Manuscrito excluido com sucesso');

        return Redirect::to('manuscritos');
    }

}
