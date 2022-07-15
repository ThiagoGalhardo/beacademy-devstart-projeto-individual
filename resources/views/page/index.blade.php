@extends('template.index')
@section('title', 'Página inicial')
@section('content')

<!-- ============== HERO ============ -->

<main class="container-main mt-5 col d-flex align-items-center">

    <div class="container mt-5">
        <div class="row d-flex justify-content-around">
            <div class="col-md-5">
                <figure><img src="{{ url('img/img-main.svg') }}" alt=""></figure>
            </div>
            <div class="col-md-4 mb-5 d-flex align-items-center">
                <div class="col">
                    <h1 class="title fs-2 ">Comprometimento e transparência</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi accusamus aut rerum sed maxime, magnam neque sapiente quidem</p>
                    <a href="#" class="button">Leia mais</a>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
