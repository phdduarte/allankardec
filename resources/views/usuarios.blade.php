@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $texto }}
                    @if(Auth::user()->type=='admin')
                        <a class="pull-right" href="{{ route('usuarios.create') }}">Novo Usuário{+}</a>
                    @endif
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">{{Session::get('mensagem_sucesso')}}</div>
                    @endif  
                    <table class="table table-striped">
                        <thead>
                            <tr>
                              <th scope="col">Nome</th>
                              <th scope="col">E-mail</th>
                              <th scope="col">Tipo</th>
                              <th scope="col">Confirmado</th>
                              <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->name}}</th>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->type}}</td>
                                    <td>
                                        @if ($user->confirmed == true)
                                        Liberado
                                        @else
                                        Não liberado
                                        @endif
                                    </td>
                                    <td>
                                    <a href="{{route('usuarios.edit', $user->id)}}" class="btn btn-xs btn-default">Editar</a>
                                        @if(Auth::user()->id != $user->id)
                                        {!!Form::open(['method' => 'DELETE','url' => route('usuarios.destroy', $user->id),'style' => 'display: inline;'])!!}
                                            <button type="submit" class="btn btn-xs btn-danger">Excluir</button>
                                        {!!Form::close()!!}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
