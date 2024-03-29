@extends('template.index')
@section('title', 'Lista de usuários')
@section('content')



<div class="container-main mt-5 pt-5">
    <div class="container p-5">

        <h3>Olá, {{ Auth::user()->name }} </h3>

        <hr>

        <div class="container mt-5 d-flex justify-content-center">
            <a class="btn btn-primary me-3" href="/account/{{ Auth::user()->id }}/orders">Seus pedidos</a>
            <a class="btn btn-primary mx-3" href="/account/{{ Auth::user()->id }}">Suas informações</a>
            <a href="https://api.whatsapp.com/send?phone=5511980942207&text=Ol%C3%A1%2C%20gostaria%20de%20seguir%20o%20atendimento%20por%20aqui!" target="_blank" type="button" class="btn btn-success mx-3"><i class="bi bi-whatsapp me-2"></i>Conversar pelo WhatsApp</a>
        </div>

        <h4 class="mt-5 mb-3 text-center">Suas informações</h4>

        <div class=" mt-3"></div>
        <table class="table table-hover table-danger table-striped">
            <thead class="text-center">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Data de Cadastro</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d/m/Y - H:i:s', strtotime($user->created_at)) }}</td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
