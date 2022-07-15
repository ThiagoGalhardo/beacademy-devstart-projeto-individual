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
                <a href="/register" class="btn btn-primary">Comprar Agora</a>
            </div>
        </div>

    </div>


</div>
@endsection



<style>

</style>
