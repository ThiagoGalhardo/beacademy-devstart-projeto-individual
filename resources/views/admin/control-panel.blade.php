@extends('template.index')
@section('title', 'Painel de controle')
@section('content')



<div class="mt-5 pt-5">
    <div class="container p-5">

        <h3>Olá, {{ Auth::user()->name }} </h3>

        <hr>

        <div class="container mt-5 d-flex justify-content-center">
            <a class="btn btn-primary me-3 px-4" href="{{route('users.list')}}">Listar usuários</a>
            <a class="btn btn-primary me-3 px-4" href="/admin/orders">Listar pedidos</a>
            <a class="btn btn-primary ms-3" href="/account/{{ Auth::user()->id }}">Suas informações</a>
        </div>


    </div>
</div>
