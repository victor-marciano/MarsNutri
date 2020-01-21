@extends('mail.master')

@section('content')
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-md-8 mx-auto">
                <p>Email enviado do formulário de contato do site</p>
            <p>Boa tarde MarsNutri, eu {{ $nome }} estou enviando a seguinte mensagem: {{ $mensagem }}</p>             
            </div>
        </div>
    </div>
@endsection