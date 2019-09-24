@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                  LINKS
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">{{Session::get('mensagem_sucesso')}}</div>
                    @endif  
                    <div class="center">
                      
                      <h2>Links de interesse para os pesquisadores do Espiritismo:</h2>

                      <br><br>
                      
                      
                      <a href="http://www.autoresespiritasclassicos.com/">
                        <h3>- AUTORES ESPÍRITAS CLÁSSICOS – BIBLIOTECA VIRTUAL</h3>
                      </a>
                                          
                      <a href="https://www.facebook.com/HistoriaDoEspiritismo/">
                        <h3>- CSI IMAGENS E REGISTROS HISTÓRICOS DO ESPIRITISMO</h3>
                      </a>
                      
                      <a href="https://www.facebook.com/groups/Espiritismo.COM.Kardec/">
                        <h3>- ECK – ESPIRITISMO COM KARDEC</h3>
                      </a>
                      
                      <a href="https://www.comkardec.net/">
                        <h3>-ESPIRITISMO COM KARDEC</h3>
                      </a>

                      <a href="http://www.geae.net.br/index.php/pt-br/">
                        <h3>- GEAE - GRUPO DE ESTUDOS AVANÇADOS ESPÍRITAS</h3>
                      </a>
                      
                      <a href="https://www.facebook.com/groups/189791881774515/">
                        <h3>- GRUPO ESÍRITA AMÉLIE BOUDET</h3>
                      </a>
        
                      <a href="http://www.ipeak.net/site/index.php">
                        <h3>- IPEAK – INSTITUTO DE PESQUISAS ESPÍRITAS ALLAN KARDEC</h3>
                      </a>
 
                      <a href="https://sites.google.com/site/jeespiritas/">
                        <h3>- JORNAL DE ESTUDOS ESPÍRITAS</h3>
                      </a>
 
                      <a href="https://kardecpedia.com/">
                        <h3>- KARDECPEDIA</h3>
                      </a>

                      <a href="http://www.lihpe.net/wordpress/">
                        <h3>- LIGA DE PESQUISADORES DO ESPIRITISMO</h3>
                      </a>
      
                      <a href="https://www.ufjf.br/nupes/">
                        <h3>- NUPES – NÚCLEO DE PESQUISA E ESPIRITUALIDADE EM SAÚDE</h3>
                      </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection