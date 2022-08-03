@extends('template.index')
@section('title', 'Lista de usuários')
@section('content')



<div class="container-main mt-5 pt-5">
    <div class="container p-5">

        <h3>Olá, {{ Auth::user()->name }} </h3>

        <hr>

        <div class="container mt-5 d-flex justify-content-center">
            <a class="btn btn-primary me-3 px-4" href="/account/{{ Auth::user()->id }}/orders">Seus pedidos</a>
            <a class="btn btn-primary ms-3" href="/account/{{ Auth::user()->id }}">Suas informações</a>
        </div>

        <h4 class="mt-5 mb-3 text-center">Seus pedidos</h4>

        <div class=" mt-3"></div>
        <table class="table table-hover table-danger table-striped">
            <thead class="text-center">
                <tr>
                    <th scope="col">Número do pedido</th>
                    <th scope="col">Serviço</th>
                    <th scope="col">Data de solicitação</th>
                    <th scope="col">Valor pago</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="text-center">

                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->service_name}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->status}}</td>

                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>
