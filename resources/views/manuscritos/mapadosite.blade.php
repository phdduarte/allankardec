@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                MAPA DO SITE
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">{{Session::get('mensagem_sucesso')}}</div>
                    @endif  
                    <div>
                        <img src="./images/mapadosite.png" alt="MAPA DO SITE">	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
