@extends('mail.master')

@section('content')
<div class="container h-100">
    <div class="row align-items-center h-100">
        <div class="col-md-8 mx-auto">
            <div class="card">     
                <div class="card-header" style="border:none;">
                  <img src="{{ url('img/tccLogoNoBg.png')}}" alt="Logo" width="100px" height="100px">  
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title">Cadastro efetuado</h3>
                    <p class="card-text">Olá Usuário, seu cadastro foi efetuado com sucesso. Agora pode usufruir dos nossos principais recursos e começar a sua vida fitness da melhor maneira possível, acesse já seu novo perfil!</p>
                    <a href="#" class="btn btn-theme">Seu perfil</a>
                </div>
                <div class="card-footer text-muted" style="border:none;">
                    Footer
                </div>
            </div>                
            
        </div>
    </div>
</div>
@endsection