<?php

namespace App\Http\Controllers;

use App\Manuscrito;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use File;

class ManuscritosController extends Controller
{
    public $tipoManuscrito = ['Manuscrito', 'Cartas', 'Fotos', 'Jornais', 'Livros', 'Revistas'];

    public function index()
    {
      $manuscritos = Manuscrito::paginate(10);
    	return view('manuscritos.lista',['manuscritos' => $manuscritos]);	
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
      
      $manuscritos = Manuscrito::where('tipo', $pos)->paginate(12);

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

      $manuscrito = new Manuscrito;
      $manuscrito = $manuscrito->create($request->except('pic', 'pdf'));//retorna uma instancia do banco
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
        $manuscrito = Manuscrito::findOrFail($id);
        
        return view('manuscritos.formulario',['manuscrito' => $manuscrito, 'tipoManuscrito' => $this->tipoManuscrito]);
    }

    public function atualizar($id, Request $request)
    {
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
