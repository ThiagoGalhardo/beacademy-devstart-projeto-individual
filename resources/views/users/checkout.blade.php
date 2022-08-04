@extends('template.index')
@section('title', 'Lista de usuários')
@section('content')


<div class="container mt-5 pt-5">
    <div class="container p-5">

        <h3>Resumo do pedido</h3>

        <hr>

        <div class="d-flex justify-content-around mt-5">

            <div class="card p-3">
                <h5>Declaração de imposto de renda</h4>
                    <p> Método: Online</p>
                    <p> Preço: R$ 149,99</p>
                    <p> Data: {{ date('d/m/Y') }}</p>
            </div>


            <div class="card p-3">
                <h5>Use o QR Code do Pix para pagar</h4>
                    <p>Abra o app em que vai fazer a transferência,
                        <br> escaneie a imagem ou cole o código do QR Code
                    </p>
                    <p> Preço: R$ 149,99</p>
                    <div class="text-center">
                        <img src="{{ asset('img/qr-code.png') }}" alt="Imagem Imposto de Renda" style="width: 10rem;">
                    </div>

                    <button class="btn btn-primary mt-3" onclick="copyText()">Copiar código do QR Code</button>

            </div>

        </div>

        <div class="text-center mt-5">
            <form action="{{ route('users.saveOrder') }}" method="POST">
                @csrf
                <button class="btn btn-success btn-lg" type="submit">Já paguei, finalizar pedido!</button>
            </form>

        </div>


    </div>

</div>


<style>
    #copy-code {
        visibility: hidden;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    function copyText() {
        navigator.clipboard.writeText("00020126580014BR.GOV.BCB.PIX01365e118357-fa9e-40b5-8150-4dc6f1d1f3485204000053039865406149.995802BR5923Thiago de Lima Galhardo6009SAO PAULO61080540900062070503***6304AB91");
    }
</script>
