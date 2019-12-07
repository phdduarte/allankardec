@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">O Museu:
                    <a class="pull-right" href="{{ url('manuscritos/novo')}}">Novo Item {+}</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">{{Session::get('mensagem_sucesso')}}</div>
                    @endif  
                    <table class="table table-striped">
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
                                  <td>
                                      <a href="manuscritos/{{$manuscrito -> id}}/editar" class="btn btn-default">Editar</a>
                                      {!!Form::open(['method' => 'DELETE','url' => 'manuscritos/'.$manuscrito->id,'style' => 'display: inline;'])!!}
                                      <button type="submit" class="btn btn-danger">Excluir</button>
                                      {!!Form::close()!!}
                                  </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
