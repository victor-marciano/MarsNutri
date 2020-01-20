@extends('layouts.master')

@section('title', 'Perfil')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Editar Perfil</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nome completo</label>
                                <input type="text" class="form-control" placeholder="Company" value="Creative Code Inc.">
                            </div>                            
                        </div>                      
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 pr-1">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text" class="form-control" placeholder="Telefone" value="+55 (011) 931519757">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" class="form-control" placeholder="City" value="Mike">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>País</label>
                                <input type="text" class="form-control" placeholder="Country" value="Andrew">
                            </div>
                        </div>                        
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Profissão</label>
                                <input type="text" class="form-control" placeholder="Country" value="Andrew">
                            </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Foto de perfil</label>
                                <input type="file" name="" id="" placeholder="A">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Foto de capa</label>
                                <input type="file" name="" id="" placeholder="A">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Sobre você</label>
                                <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="{{ url('img/capa1.jpg') }}">
            </div>
            <div class="card-body">
                <div class="author">
                     <a href="#">
                    <img class="avatar border-gray" src="{{ url('img/userIcon3.png') }}" alt="...">
                        <h5 class="title">Mike Andrew</h5>
                    </a>
                    <p class="description">
                        michael24
                    </p>
                </div>
                <p class="description text-center">
                    "Lamborghini Mercy <br>
                    Your chick she so thirsty <br>
                    I'm in that two seat Lambo"
                </p>
            </div>
            <hr>
            <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-google-plus-g"></i>
                </button>
            </div>
        </div>
    </div>
</div>
          
@endsection