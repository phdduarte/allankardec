@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
          <div class="panel panel-default">
                <div class="panel-heading">
                  CONTATO
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">
                          {{Session::get('mensagem_sucesso')}}
                        </div>
                    @endif  
                    <div class="center"> 
                      <p>
                        Para sugestões e, em caso de dúvidas, entre em contato conosco pelo email:<br><br>allankardec.online@gmail.com
                      </h2>
                    </div>
                </div>    
          </div>
    </div>
</div>
@endsection
