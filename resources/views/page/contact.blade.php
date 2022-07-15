@extends('template.index')
@section('title', 'Contato')
@section('content')

<!-- ============== ABOUT ============ -->

<div class="container mt-5">

    <div class="form-contact row pt-3 justify-content-around align-items-center">
        <p class="text-center fs-3">Contato</p>
        <p class="text-center fs-6">Possui alguma dúvida? Mande uma mensagem!</p>
        <hr>

        <div class="col-lg-4 me-5 mt-4">
            <figure><img src="{{ url('img/img-contact.svg') }}" alt=""></figure>
        </div>

        <div class="card col-lg-5 p-3 ms-5" style="background-color: #DDA9B2;">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensagem</label>
                    <textarea rows="5" type="text" class="form-control" id="message" name="message" style="resize: none"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-dark px-5">Enviar</button>
            </form>
        </div>

    </div>

</div>

<style>

</style>
@endsection
