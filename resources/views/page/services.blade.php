@extends('template.index')
@section('title', 'Serviços')
@section('content')

<!-- ============== ABOUT ============ -->

<div class=" container-main mt-5">

    <div class=" container d-flex justify-content-center">

        <div class="row d-flex justify-content-center">

            <h3 class="mt-5 text-center fs-4">Serviços prestados</h3>


            <div class="card me-5 mt-3" style="width: 20rem;">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('img/icon-1.png') }}" alt="">
                    </div>
                    <hr>
                    <h5 class="card-title mt-3">Consultoria Tributária</h5>
                    <p class="card-text fs-8">Consultoria tributária ou fiscal amparada nas Jurisprudências. Análise de Auto de Infração. Verificação de Benefícios Fiscais ou Tributários.</p>
                </div>
            </div>

            <div class="card me-5 mt-3" style="width: 20rem;">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('img/icon-2.png') }}" alt="">
                    </div>
                    <hr>
                    <h5 class="card-title">Planejamento Tributário</h5>
                    <p class="card-text">Planejamento tributário no Imposto de Renda de Pessoa Física. Declaração do Imposto de Renda. Aconselhamento sobre a melhor aplicação e aproveitamento da Legislação Tributária.</p>
                </div>
            </div>

            <div class="card me-5 mt-3" style="width: 20rem;">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('img/icon-3.png') }}" alt="">
                    </div>
                    <hr>
                    <h5 class="card-title">Comprometimento</h5>
                    <p class="card-text">A consultoria jurídica é um serviço exclusivo, de acordo com o caso concreto, visando a melhor aplicação das leis tributárias para cada cliente, sempre de forma clara e transparente.</p>
                </div>
            </div>

            <div class="card me-5 mt-3" style="width: 20rem;">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('img/icon-4.png') }}" alt="">
                    </div>
                    <hr>
                    <h5 class="card-title">Atendimento Personalizado</h5>
                    <p class="card-text">O atendimento é 100% personalizado, com a melhor qualidade, ética, transparência, segurança e confiança possíveis.</p>
                </div>
            </div>

            <div class="card me-5 mt-3" style="width: 20rem;">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('img/icon-5.png') }}" alt="">
                    </div>
                    <hr>
                    <h5 class="card-title">Imposto de Renda</h5>
                    <p class="card-text">Declaração do Imposto de Renda de Pessoa Física, com análise da opção de tributação mais benéfica ao cliente.</p>
                </div>
            </div>

            <div class="card me-5 mt-3" style="width: 20rem;">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('img/icon-6.png') }}" alt="">
                    </div>
                    <hr>
                    <h5 class="card-title">Valores</h5>
                    <p class="card-text">Integridade: conduta franca, honesta e leal com todos os públicos. Segurança: preservar os interesses do cliente e protegê-lo de possíveis riscos. Proximidade: interação
                        estreita, séria e direta com o cliente.</p>
                </div>
            </div>

        </div>

    </div>


    <style>
        img {
            height: 38px;
        }

        .card-text {
            font-size: 14px;
        }
    </style>
    @endsection
