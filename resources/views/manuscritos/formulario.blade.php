@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe abaixo as informações do manuscrito
                    <a class="pull-right" href="{{ url('manuscritos/')}}">Seus Manuscritos -></a>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                    @endif 

                    @if(Session::has('erro')) 
                        <div class="alert alert-danger">{{Session::get('erro')}}</div>
                    @endif   

                    @if(Request::is('*/editar')) 
                        {!!Form::model($manuscrito,['method' => 'PATCH','url' => 'manuscritos/'.$manuscrito->id, 'files'=>true])!!}
                    @else   
                        {!!Form::open(['url' => 'manuscritos/salvar', 'files'=>true])!!}
                    @endif  

                    {!!Form::label('titulo','Titulo')!!}
                    {!!Form::input('text','titulo',null,['class' => 'form-control','autofocus','placeholder' => 'Titulo'])!!}  

                    {!!Form::label('criadores','Criadores')!!}
                    {!!Form::input('text','criadores',null,['class' => 'form-control',null,'placeholder' => 'Criadores'])!!}

                    {!!Form::label('data','Data')!!}    
                    {!!Form::input('text','data',null,['class' => 'form-control',null,'placeholder' => 'Data'])!!}  

                    {!!Form::label('local','Local de origem')!!}    
                    {!!Form::input('text','local',null,['class' => 'form-control',null,'placeholder' => 'Local de origem'])!!}   

                    {!!Form::label('idioma','Idioma')!!}    
                    {!!Form::input('text','idioma',null,['class' => 'form-control',null,'placeholder' => 'Idioma'])!!}  

                    {!!Form::label('numero','Numero de folhas')!!}   
                    {!!Form::input('number', 'numero', null, ['class' => 'form-control', null, 'placeholder' => 'Numero de folhas']) !!}
                    {!!Form::label('tipo','Tipo do arquivo')!!}
                    {{ Form::select('tipo', $tipoManuscrito, 'Manuscrito',['class' => 'form-control', null]) }}
                    <br>
                    {!! Form::label('Escolha a imagem do manuscrito:') !!}
                    {!! Form::file('pic', array('class' => 'image')) !!}
                    <br>
                    <br>
                    {!! Form::label('Escolha o PDF do manuscrito:') !!}
                    {!! Form::file('pdf', array('class' => 'image')) !!}
                    <br>
                    {!!Form::submit('Salvar', ['class' => 'btn btn-primary'])!!} 
   
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
