@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            
                
                    <div class="ribbon" style="opacity: 1;">
                        <div class="ribbon-content">
                          <div class="col col1of2 center">
                            <span id="countup" class="big-number">0</span>
                            <span>Total do acervo</span>
                          </div>
                          <div class="col col1of2">
                            <p>O nosso museu digital se encontra constantemente sendo atualizado com novos documentos de interesse para o Espiritismo. Verifique sempre as nossas atualizações com novas fontes primárias que propiciam material de subsídio para pesquisas e estudos sobre a Doutrina Espírita. 
                            </p><br>
                            <p>
                            Compartilhe e divulgue nosso museu digital: <a href="/">AllanKardec.online</a>
                            </p>
                          </div>
                        </div>
                
                    </div>
        
    </div>
</div>


@endsection

@section('js')

<script>
function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));

    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("countup", 0, {{$total}}, 2000);
</script>
@endsection