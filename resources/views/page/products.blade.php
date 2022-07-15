@extends('template.index')
@section('title', 'Solicitar Imposto de Renda')
@section('content')

<!-- ============== ABOUT ============ -->

<div class="container container-main mt-5">

    <h3 class="pt-5 text-center">Declaração de Imposto de Renda</h3>
    <p class="pb-3 text-center">Já declarou seu imposto de renda? Aproveite nossa promoção!</p>


    <div class="d-flex justify-content-center">

        <div class="card text-center" style="width: 20rem;">
            <img class="" src="{{ asset('img/img-ir.png') }}" alt="Imagem Imposto de Renda">
            <div class="card-body">
                <h5 class="card-title">Declaração IR
                    @php
                    echo date('Y');
                    @endphp
                </h5>
                <p class="card-text text-start px-2">Declaração de imposto de renda de forma simples, prática e transparente.</p>

                <p class="mb-0" style="text-decoration: line-through;">De: R$ 200,00</p>

                <p>Por: <strong> R$ 149,99 </strong> </p>
                <a href="#" class="btn btn-primary">Comprar Agora</a>
            </div>
        </div>

    </div>


</div>
@endsection



<style>
    .btn-primary {
        color: #f1f1f1 !important;
        background-color: #AB838B !important;
        border-color: #AB838B !important;
    }

    .btn-primary:hover {
        color: #f1f1f1 !important;
        background-color: #785259 !important;
        border-color: #785259 !important;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        box-shadow: 0 0 0 .2rem rgba(120, 82, 89, 0.5) !important;
    }
</style>
