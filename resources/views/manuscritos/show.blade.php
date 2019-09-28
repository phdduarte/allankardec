@extends('layouts.app')
@section('content')
<style>
  canvas{
    min-width: 10px;
    min-height: 10px;
  }
</style>
<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                {{ $manuscrito->titulo }}
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso')) 
                        <div class="alert alert-danger">{{Session::get('mensagem_sucesso')}}</div>
                    @endif  
                    <div>
                      <button id="prev">Anterior</button>
                      <button id="next">Próxima</button>
                      &nbsp; &nbsp;
                      <span>Página: <span id="page_num"></span> de <span id="page_count"></span></span>
                      
                      &nbsp; &nbsp;
                      <button id="zoom_out" >-</button>
                      <button id="zoom_in">+</button>
                    </div>
                    <div style="max-width:80%;overflow:auto">
                      <canvas id="the-canvas"></canvas>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>
<script>
var pdfData = atob('{!!  base64_encode(file_get_contents("uploads/pdf/$manuscrito->pdf")) !!}');

var pdfjsLib = window['pdfjs-dist/build/pdf'];

pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';

var pdfDoc = null,
    pageNum = 1,
    pageRendering = false,
    pageNumPending = null,
    pdfScale = 1,
    canvas = document.getElementById('the-canvas'),
    ctx = canvas.getContext('2d');

/**
 * Get page info from document, resize canvas accordingly, and render page.
 * @param num Page number.
 */
function renderPage(pageNumber, s) {
  pageRendering = true;
  
  // Using promise to fetch the page
  pdfDoc.getPage(pageNumber).then(function(page) {
    console.log('Page loaded', s);
    
    var scale = s;
    pdfScale = scale;
    var viewport = page.getViewport({scale: scale});

    // Prepare canvas using PDF page dimensions
    var canvas = document.getElementById('the-canvas');
    var context = canvas.getContext('2d');
    canvas.height = viewport.height;
    canvas.width = viewport.width;
    
    // Render PDF page into canvas context
    var renderContext = {
      canvasContext: context,
      viewport: viewport
    };
    var renderTask = page.render(renderContext);
    renderTask.promise.then(function () {
      console.log('Page rendered');
    });
  });
  // Update page counters
  document.getElementById('page_num').textContent = pageNumber;
}

/**
 * If another page rendering in progress, waits until the rendering is
 * finised. Otherwise, executes rendering immediately.
 */
function queueRenderPage(num) {
    
    renderPage(num, pdfScale);
  
}

/**
 * Displays previous page.
 */
function onPrevPage() {
  if (pageNum <= 1) {
    return;
  }
  pageNum--;
  queueRenderPage(pageNum);
}

/**
 * Displays next page.
 */
function onNextPage() {

  if (pageNum >= pdfDoc.numPages) {
    return;
  }
  pageNum++;
  queueRenderPage(pageNum);
}

function zoomout(){
    if (pdfScale <= 0.25) {
        return;
    }
    var pn = parseInt(document.getElementById('page_num').textContent);
    pdfScale = pdfScale - 0.25;
    
    queueRenderPage(pn);
}

function zoomin() {
    var pn = parseInt(document.getElementById('page_num').textContent)
    pdfScale = pdfScale + 0.25;
    queueRenderPage(pn);
    //displayPage(shownPdf, pageNum);
}

document.addEventListener('DOMContentLoaded', function() {
  var prev = document.getElementById('prev');
    prev.addEventListener('click', onPrevPage);
  var next = document.getElementById('next');
    next.addEventListener('click', onNextPage);
  
  var zoom_in = document.getElementById('zoom_in');
    zoom_in.addEventListener('click', zoomin);
  var zoom_out = document.getElementById('zoom_out');
    zoom_out.addEventListener('click', zoomout);
  

});

/**
 * Asynchronously downloads PDF.
 */
pdfjsLib.getDocument({data: pdfData}).promise.then(function(pdfDoc_) {
  console.log('PDF loaded');
  pdfDoc = pdfDoc_;
  document.getElementById('page_count').textContent = pdfDoc.numPages;
  
  // Initial/first page rendering
  renderPage(pageNum, pdfScale);
});
</script>

@endsection
