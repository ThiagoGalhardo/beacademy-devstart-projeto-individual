@extends('template.index')
@section('title', 'Escolha')
@section('content')

<main class="container-main mt-5 pt-5">

    <h3 class="pt-5 text-center">Escolha como deseja prosseguir</h3>
    <p class="pb-3 text-center">Preencha online ou siga as instruções através do whatsapp</p>

    <div class="d-flex justify-content-center">

        <div class="row">

            <div class="col">
                <div class="d-flex justify-content-center">
                    <div class="card text-center" style="width: 20rem;">
                        <div class="text-center">
                            <img src="{{ asset('img/form.png') }}" alt="Imagem Imposto de Renda" style="width: 10rem;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Preencher formulário online</h5>
                            <p class="card-text text-start px-2">Preencha o formulário online, de forma simples e prática</p>
                            <a href="/form" class="btn btn-primary">Preencher Agora</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="d-flex justify-content-center">
                    <div class="card text-center" style="width: 20rem;">
                        <div class="text-center">
                            <img src="{{ asset('img/whatsapp.png') }}" alt="Imagem Imposto de Renda" style="width: 10rem;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Conversar pelo WhatsApp</h5>
                            <p class="card-text text-start px-2">Uma alternativa caso não queira preencher o formulário online</p>
                            <a href="{{ route('users.checkout', Auth::user()->id) }}" class="btn btn-primary">Conversar Agora</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


</main>
@endsection
