@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">PESSOAS
                    <a class="pull-right" href="{{ url('manuscritos/novo')}}">Novo Manuscrito {+}</a>
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
                              <th scope="col">ACÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pessoas as $pessoa)
                                <tr>
                                  <th scope="row">{{$pessoa -> id}}</th>
                                  <td>{{$pessoa -> titulo}}</td>
                                  <td>{{$pessoa -> criadores}}</td>
                                  <td>{{$pessoa -> data}}</td>
                                  <td>
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
