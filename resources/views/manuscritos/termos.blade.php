@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                  TERMOS E CONDIÇÕES
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">{{Session::get('mensagem_sucesso')}}</div>
                    @endif  
                    <div class="center"> 
                      <h2 class="py2">
                        Licença do usuário do AllanKardec.online
                      </h2>
                      <br>
                      <h3 class="pb2">
                        Sobre esta licença
                      </h3>
                      <br>
                      <p class="justify">
                      Esta licença de usuário define os termos em que você pode usar o conteúdo no AllanKardec.online Museu, a menos que seja indicado de outra forma nos termos de acesso individuais do conteúdo. Para os propósitos desta licença de usuário, <strong> conteúdo</strong> significa qualquer material (em qualquer formato) que o site disponibilize para você acessar e imprimir ou baixar no ou através do site AllanKardec.online. Ao copiar ou usar qualquer conteúdo, você confirma que aceita as condições desta licença de usuário.
                      </p>
                      <br>
                      <p class="justify">
                      Esta licença de usuário não concede nenhum direito de usar os nomes, logotipos ou marcas registradas pelo AllanKardec.online Museu , a menos que expressamente declarado em contrário. 
                      </p>
                      <br>
                      <h3 class="py2">
                      Uso permitido do conteúdo
                      </h3>
                      <br>
                      <p class="justify">
                      Você pode imprimir ou baixar qualquer conteúdo apenas para fins não comerciais, incluindo, mas não limitado a estudo particular, pesquisa ou ensino e instrução, sob os seguintes termos:
                      </p>
                      <br>
                      <p class="justify">
                      Se o uso permitido do conteúdo envolver qualquer distribuição, disseminação ou comunicação do conteúdo (por qualquer meio ou processo) a outra pessoa, você deve (sempre que possível) reconhecer a fonte do conteúdo da seguinte forma: “Descrição do documento utilizado conforme o Título dado ao documento no site AllanKardec.online”, Crédito da Foto: AllanKardec.online Museu, vinculando, sempre que possível, o site AllanKardec.online como a fonte do conteúdo.
                      </p>
                      <br>
                      <p class="justify">
                      Outras leis de direitos autorais, proteção de dados e privacidade podem ainda se aplicar ao conteúdo.
                      </p>
                      <br>
                      <h3 class="py2">
                      Uso proibido do conteúdo
                      </h3>
                      <br>
                      <p class="justify">
                      Você não deve usar nenhuma parte do conteúdo para fins comerciais, exceto se obtiver autorização por escrito. Para os propósitos desta licença de usuário, fins comerciais significa qualquer uso do conteúdo que é primariamente destinado ou direcionado para vantagem comercial ou compensação monetária. Isto inclui qualquer uso em ou em qualquer coisa que seja cobrado, está relacionado com algo que é cobrado ou se destina a gerar lucro.
                      </p>
                      <br>
                      <p class="justify">
                      Para mais informações ou dúvidas sobre essa licença de usuário, consulte-nos através do email: allankardec.online@gmail.com
                      </p>
                      <br>
                    </div>
                    <div class="ingles center"> 
                      <h2 class="py2">
                      AllanKardec.online user licence
                      </h2>
                      <h3 class="pb2">
                      About this licence
                      </h3>
                      <p class="justify">
                      This user licence sets out the terms on which you may use the content on AllanKardec.online Museum, unless otherwise stated in the content's individual terms of access. For the purposes of this user licence, <strong> content</strong> means any material (in any format) that the AllanKardec.online makes available to you to access and print or download on or through the AllanKardec.online website from time to time. By copying or using any content, you confirm that you accept the conditions of this user licence.
                      </p>
                      <br>
                      <p class="justify">
                      This user licence does not grant any rights to use the names, logos or trademarks of either the AllanKardec.online, unless expressly stated otherwise.
                      </p>
                      <br>
                      <h3 class="py2">
                      Permitted use of the content
                      </h3>
                      <br>
                      <p class="justify">
                      You may print off or download any content only for non-commercial purposes, including but not limited to private study, research, or teaching and instruction, under the following terms:
                      </p>
                      <br>
                      <p class="justify">
                      If the permitted use of the content involves any distribution, dissemination or communication of the content (by any means or process) to another person, you must (wherever possible) acknowledge the source of the content in the following form: “Description of the document used according to the title given to the document on the AllanKardec.online website”, Photo: AllanKardec.online Museum, linking where possible to the AllanKardec.online site as the source of the content.
                      </p>
                      <br>
                      <p class="justify">
                      You may not remove any copyright, trademark or other proprietary notices including attribution metadata, credits and notices, that are placed in or near the text, images or data.
                      </p>
                      <br>
                      <p class="justify">
                      Further copyright, data protection and privacy laws may still apply to content. You must comply with all terms or restrictions other than copyright (such as trademark, publicity and privacy rights, or contractual restrictions) as may be specified in the metadata or as may otherwise apply to the Content. This licence does not affect your freedom under fair dealing or any other copyright or database right exceptions and limitations that might apply to your use.
                      </p>
                      <br>
                      <h3 class="py2"><h3>
                      Prohibited use of the content
                      </h3>
                      <br>
                      <p class="justify">
                      You must not use any part of the content for commercial purposes, except as permitted by statutory exceptions and limitations to copyright. For the purposes of this user licence, commercial purposes means any use of the content that is primarily intended for or directed toward commercial advantage or monetary compensation. This includes any use on or in anything that is itself charged for, is connected with something that is charged for or is intended to make a profit.
                      </p>
                      <br>
                      <p class="justify">
                      For further information or If you have any comments or questions about this user licence, please contact: allankardec.online@gmail.com
                      </p>
                      <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
