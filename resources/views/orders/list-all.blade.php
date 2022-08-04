@extends('template.index')
@section('title', 'Painel de controle')
@section('content')



<div class="mt-5 pt-3">
    <div class="container">
        <div class="container mt-5 d-flex justify-content-center">
            <a class="btn btn-primary me-3 px-4" href="{{route('users.list')}}">Listar usuários</a>
            <a class="btn btn-primary me-3 px-4" href="/admin/orders">Listar pedidos</a>
        </div>
    </div>
</div>


<div class="container-main ">

    <div class="container mt-3">
        <h1 class="text-center">Lista de pedidos</h1>
        <hr>
        <div class="col mb-3">
            <form class="d-flex mb-4" action="{{ route('orders.listAll') }}" method="GET">
                <input class="form-control me-2" type="search" name="search">
                <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
            </form>
        </div>
        <table class="table table-hover table-danger table-striped">
            <thead class="text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Id do usuário</th>
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
                    <td>{{ $order->service_name }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                    <td><a href="{{route('orders.listOrderUserforAdmin', $order->id )}}" class="btn btn-primary text-dark">Visualizar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class=" container mt-5 justify-content-center pagination">
            {{ $orders->links('pagination::bootstrap-4') }}
        </div>
    </div>

</div>



@endsection
