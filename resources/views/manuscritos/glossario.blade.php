@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                GLOSSÁRIO
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">{{Session::get('mensagem_sucesso')}}</div>
                    @endif  
                    <div> 
                       <div class="center">
                            <h2>
                                GLOSSÁRIO
                            </h2>
                        </div> 
                      <br>
                      <p>
                      Os itens do acervo do museu são disponibilizados em seis categorias diferentes: 
                        <a href="https://allankardec.online/manuscrito">Manuscritos</a>, 
                        <a href="https://allankardec.online/cartas">Cartas</a>, 
                        <a href="https://allankardec.online/fotos">Fotos</a>, 
                        <a href="https://allankardec.online/jornais">Jornais</a>, 
                        <a href="https://allankardec.online/livros">Livros</a> e 
                        <a href="https://allankardec.online/revistas">Revistas</a>.
                      </p>
                      <p>
                      Cada documento/ item conterá as seguintes informações:
                      </p>
                        <div class="py2">
                            <ul>
                                <li class="pb2">
                                •	ID: Identificação do documento do tipo AAAAMMDD#NÚMERO (Ano, Mês e Dia do documento, seguido de um número sequencial);
                                </li>
                                <li class="pb2">
                                <strong>•	 DESCRIÇÃO:</strong> Descrição completa do documento/item, facilitando as pesquisas através da ferramenta de busca do site e possíveis referências em artigos; 
                                </li>
                                <li class="pb2">
                                <strong>•	 TITULO: </strong>“Nome” e breve relato do documento/item;
                                </li>
                                <li class="pb2">
                                <strong>•	 PROPRIETÁRIO:</strong> Proprietário do documentos/item;
                                </li>
                                <li class="pb2">
                                <strong>•	 DATA: </strong>Data do documento/item;
                                </li>
                                <li class="pb2">
                                <strong>•	 NÚMERO DE FOLHAS:</strong> Informa a quantidade de folhas/páginas do documento/item; 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
