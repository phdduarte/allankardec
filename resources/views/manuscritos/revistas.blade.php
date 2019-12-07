@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                  REVISTAS
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">{{Session::get('mensagem_sucesso')}}</div>
                    @endif  
                    <div class="clearfix">
                      @foreach($manuscritos as $manuscrito)
                        @if ($manuscrito -> tipo === '5')      
                          <div class="col col-4 min-height-40">
                            <div class="container-img">
                              <img src="http://allankardec.online/uploads/{{$manuscrito -> id}}.jpg" alt="Avatar" class="image">
                              <div class="overlay">
                                <div class="text">{{$manuscrito -> titulo}}</div>
                              </div>
                            </div>
                            <div class="p1">
                              <ul class="list-reset">
                                <li>
                                  <b>ID: </b>{{$manuscrito -> id}}
                                </li>
                                <li>
                                  <b>TITULO: </b>{{$manuscrito -> titulo}}
                                </li>
                                <li>
                                  <b>CRIADORES: </b>{{$manuscrito -> criadores}}
                                </li>
                                <li>
                                  <b>DATA: </b>{{$manuscrito -> data}}
                                </li>
                              </ul>
                            </div>
                          </div>
                        @endif
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





<!--table class="table table-striped">
                        <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">TITULO</th>
                              <th scope="col">CRIADOR</th>
                              <th scope="col">DATA</th>
                              <th scope="col">TIPO</th>
                              <th scope="col">ACÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($manuscritos as $manuscrito)
                                <tr>
                                  <th scope="row">{{$manuscrito -> id}}</th>
                                  <td>{{$manuscrito -> titulo}}</td>
                                  <td>{{$manuscrito -> criadores}}</td>
                                  <td>{{$manuscrito -> data}}</td>
                                  <td>
                                    @if ($manuscrito -> tipo === '0')
                                      Manuscrito
                                    @endif
                                    @if ($manuscrito -> tipo === '1')
                                      Carta
                                    @endif
                                    @if ($manuscrito -> tipo === '2')
                                      Foto
                                    @endif
                                    @if ($manuscrito -> tipo === '3')
                                      Jornal
                                    @endif
                                    @if ($manuscrito -> tipo === '4')
                                      Livro
                                    @endif
                                    @if ($manuscrito -> tipo === '5')
                                      Revista
                                    @endif
                                  </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table-->
