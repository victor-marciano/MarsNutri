@extends('layouts.app')

@section('title', 'Login')

@section('content')
<form class="form-signin" name="formLogin" enctype="multipart/form-data">
    @csrf
    <img class="mb-2" src="{{ url('img/tccLogoNoBg.png') }}" alt="" width="150" height="150">    
    <div class="md-form">          
      <input type="email" id="inputIconEx1" class="form-control" name="email">
      <label for="inputIconEx1">E-mail</label>
    </div>
    <div class="md-form">
      <input type="password" id="inputIconEx1" class="form-control" name="password">
      <label for="inputIconEx1">Senha</label>
    </div>
    <div class="checkbox mb-3">
      {{-- <label>
        <input type="checkbox" value="remember-me"> Lembrar-me |
      </label>           --}}
      <label>
        <a href="">Esqueci minha senha</a>                      
      </label>          
    </div>        
    <button class="btn btn-lg btn-theme btn-block" type="submit" id="buttonLogin">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy;MarsNutri - 2020</p>
  </form> 
@endsection
