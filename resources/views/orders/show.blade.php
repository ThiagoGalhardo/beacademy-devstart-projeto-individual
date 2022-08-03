@extends('template.index')
@section('title', 'Painel de controle')
@section('content')



<div class="mt-5 pt-5">
    <div class="container pt-5">

        <h3>Olá, {{ Auth::user()->name }} </h3>

        <hr>

        <div class="container mt-5 d-flex justify-content-center">
            <a class="btn btn-primary me-3 px-4" href="{{route('users.list')}}">Listar usuários</a>
            <a class="btn btn-primary me-3 px-4" href="/admin/orders">Listar pedidos</a>
            <a class="btn btn-primary ms-3" href="/account/{{ Auth::user()->id }}">Suas informações</a>
        </div>


    </div>
</div>


<div class="container-main pt-5">

    <div class="container mt-5">
        <h1 class="text-center">Lista de pedidos</h1>
        <hr>
        <table class="table table-hover table-danger table-striped">
            <thead class="text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Id do usuário</th>
                    <th scope="col">Nome do usuário</th>
                    <th scope="col">Serviço</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Status</th>
                    <th scope="col">Data do pedido</th>
                    <th scope="col">Última atualização</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $user[0]->name }}</td>
                    <td>{{ $order->service_name }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->update_at }}</td>
                    <td><a href="" class="btn btn-primary text-dark">Visualizar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>



@endsection
