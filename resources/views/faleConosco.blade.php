@extends('layouts.master')

@section('title', 'Fale Conosco')

@section('content')
<div class="row">
    <div class="col-md-6">           
     <div class="card">
         <div class="card-header">
             <h4 class="card-title">Fale Conosco</h4>             
         </div>
         <div class="card-body">
             <p>Possui alguma dúvida ? alguma reclamação ou sugestão ? Entre em contato conosco enviando uma mensagem, daremos o retorno o mais rápido possível.</p>
             <p>A mensagem será enviada para o nosso time de suporte, e será respondida no e-mail que você informar abaixo.</p>
             <h4>Formulário</h4>
             <form>
                <div class="row">
                    <div class="col-md-10 pr-1">
                        <div class="form-group">
                            <label>Nome completo</label>
                            <input type="text" class="form-control" placeholder="Seu nome">
                        </div>                            
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-md-10 pr-1">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" placeholder="Seu e-mail" >
                        </div>
                    </div>                   
                </div>                
                <div class="row">
                    <div class="col-md-10 pr-1">
                        <div class="form-group">
                            <label>Assunto</label>
                            <input type="text" class="form-control" placeholder="Qual o assunto?" >
                        </div>
                    </div>                   
                </div>                
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label>Mensagem</label>
                            <textarea rows="4" cols="80" class="form-control" placeholder="Digite aqui sua mensagem" value="Mike"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
           </div>
     </div>          
    </div>
    <div class="col md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Outros meios de contato</h4>
            </div>
            <div class="card-body">                
                <p>Email do suporte: <a href="mailto:suporte.marsnutri@gmail.com">suporte.marsnutri@gmail.com</a></p>
                <p>Telefone 1: +55(011)93151-9757</p>
                <p>Telefone 2: +55(011)99999-9999</p>                
                <hr>
                <h4>Onde estamos?</h4>
                <div id="mapa" class="map"></div>                
                {{-- <img src="http://maps.googleapis.com/maps/api/staticmap?center=-22.912869, -43.228963&zoom=11&size=250x250"> --}}
            </div>
        </div>
    </div>
</div>
<script> 
    function inicializar() {
      var coordenadas = {lat: -22.912869, lng: -43.228963};

      var mapa = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 15,
        center: coordenadas 
      });

      var marker = new google.maps.Marker({
        position: coordenadas,
        map: mapa,
        title: 'Meu marcador'
      });
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBtNwmUex0fnIerL-fHfEvgmFDgD9hZCk&callback=inicializar">
  </script>
@endsection