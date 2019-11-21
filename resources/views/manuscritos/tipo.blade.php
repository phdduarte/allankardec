@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                  {{ $tipo }}
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">{{Session::get('mensagem_sucesso')}}</div>
                    @endif 
                    @if(Session::has('erro')) 
                        <div class="alert alert-danger">{{Session::get('erro')}}</div>
                    @endif   

                    
                    <div class="clearfix">
                      @foreach($manuscritos as $manuscrito)
                          <div class="sm-col sm-col-12 md-col-12 lg-col-4 min-height-40">
                            <div class="container-img p2">
                              <a href="/pdf/{{$manuscrito->id}}">
                                <div>

                                  <img src="/uploads/{{$manuscrito->photo}}" alt="Avatar" class="image">
                                  
                                </div>  
                                <div class="overlay">
                                  <div class="text">{{$manuscrito->titulo}}</div>
                                </div>
                                </a> 
                            </div>
                            <div class="p1">
                              <ul class="list-reset">
                                <li>
                                  <b>id: </b>{{$manuscrito->codigo}}
                                </li>
                                <li>
                                  <b>Título: </b>{{$manuscrito->titulo}}
                                </li>
                                <li>
                                  <b>Descrição:</b> {{ $manuscrito->descricao }}
                                </li>
                                <li>
                                  <b>Proprietário: </b>{{ $manuscrito->proprietario }}
                                </li>
                                <li>
                                  <b>Data: </b>{{ $manuscrito->data }}
                                </li>
                                <li>
                                    <b>Páginas: </b>{{ $manuscrito->numero }}
                                  </li>
                                <li>
                                <a href="/pdf/{{$manuscrito->id}}">abrir</a> | 
                                <a href="/uploads/pdf/{{$manuscrito->pdf}}">Download</a>
                                </li>
                                
                              </ul>
                            </div>
                          </div>
                        
                       @endforeach
                    </div>
                    {{$manuscritos->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
