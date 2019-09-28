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
                          <div class="col col-4 min-height-40">
                            <div class="container-img">
                              <img src="/uploads/{{$manuscrito->photo}}" alt="Avatar" class="image">
                              <div class="overlay">
                                <div class="text">{{$manuscrito->titulo}}</div>
                              </div>
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
                                    <b>Páginas: </b>{{ $manuscrito->folhas }}
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
