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

                    {!!Form::label('descricao','Descrição')!!}
                    {!!Form::input('text','descricao',null,['class' => 'form-control',null,'placeholder' => 'Descrição'])!!}

                    {!!Form::label('proprietario','Proprietário')!!}    
                    {!!Form::input('text','proprietario',null,['class' => 'form-control',null,'placeholder' => 'Proprietário'])!!}   

                    {!!Form::label('data','Data')!!}    
                    {!!Form::input('text','data',null,['class' => 'form-control',null,'placeholder' => 'Data'])!!}  

                    {!!Form::label('folhas','Número de folhas')!!}   
                    {!!Form::input('number', 'folhas', null, ['class' => 'form-control', null, 'placeholder' => 'Número de folhas']) !!}
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
