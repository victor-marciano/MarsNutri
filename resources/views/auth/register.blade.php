@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
<form class="form-signin" method="POST" name="formCadastro" enctype="multipart/form-data">
    @csrf
    <img class="mb-4" src="{{ url('img/tccLogoNoBg.png') }}" alt="" width="150" height="150">
    <!-- <h1 class="h3 mb-3 font-weight-normal">Cadastro</h1> -->
    <div class="md-form">          
      <input type="email" id="inputIconEx1" class="form-control" name="email">
      <label for="inputIconEx1">E-mail</label>
    </div>
    <div class="md-form">
      <input type="password" id="inputIconEx2" class="form-control" name="password">
      <label for="inputIconEx1">Senha</label>
    </div>    
    <div class="md-form">
      <input type="text" id="inputIconEx3" class="form-control" name="name">
      <label for="inputIconEx1">Nome Completo</label>
    </div>    
    {{-- <div class="md-form">
      <input type="file" id="inputIconEx1" class="form-control" name="avatar">
      <label for="inputIconEx1">Foto de Perfil</label>
    </div>     --}}
    <label>
      <p>Já possui um cadastro ? <a href="">Entre</a></p>
    </label>
    <br>       
    <button class="btn btn-lg btn-theme btn-block" id="buttonCadastro" type="submit">Cadastrar</button>
    <br><br><p>Ou cadastre-se com suas redes sociais:</p>
    <i class="fab fa-facebook"></i>
    <p class="mt-5 mb-3 text-muted">&copy;MarsNutri - 2020</p>
  </form>
@endsection
