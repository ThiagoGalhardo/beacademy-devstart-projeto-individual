@extends('template.index')
@section('title', 'Lista de usuários')
@section('content')

<div class="mt-5 pt-5">
    <div class="container pt-5">

        <h3>Olá, {{ Auth::user()->name }} </h3>

        <hr>

        <div class="container mt-5 d-flex justify-content-center">
            <a class="btn btn-primary me-3 px-4" href="{{route('users.list')}}">Listar usuários</a>
            <a class="btn btn-primary me-3 px-4" href="/admin/orders">Listar pedidos</a>
        </div>


    </div>
</div>


<div class="container p-5">
    <h2>Usuário</h2>

    <hr>
    <table class="table table-hover table-danger table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">e-mail</th>
                <th scope="col">Data de Cadastro</th>
                <th scope="col">Última atualização</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>

                @foreach($user as $thisUser)
                <th scope="row">{{ $thisUser->id }}</th>
                <td>{{ $thisUser->name }}</td>
                <td>{{ $thisUser->email }}</td>
                <td>{{ date('d/m/Y', strtotime($thisUser->created_at)) }}</td>
                <td>{{ date('d/m/Y', strtotime($thisUser->updated_at)) }}</td>
                <td>
                    <a href="{{ route('users.edit', $thisUser->id) }}" class="btn btn-outline-warning text-dark">Editar</a>
                    <form class="d-inline-block" action="{{ route('users.destroy', $thisUser->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger text-dark">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>




    <div class="mt-5">
        <h2 class="">Pedidos</h2>
        <hr>
        <table class="table table-hover table-danger table-striped">
            <thead class="text-center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">User_id</th>
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
                    <td><a href="{{ route('orders.listOrderUserforAdmin', $order->id) }}" class="btn btn-primary text-dark">Visualizar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <a href="{{ route('users.list') }}" class="btn btn-primary btn-lg px-5 btn-block">Voltar</a>
    </div>

</div>
</div>

@endsection
