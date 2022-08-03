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
        </div>


    </div>
</div>

@if (session()-> has('destroy'))
<div class="container mt-3 alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{session()->get('destroy')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@elseif (session()-> has('update'))
<div class="container mt-3 alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session()->get('update')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container-main ">

    <div class="container mt-5">
        <h1 class="text-center">Lista de usuários</h1>
        <hr>
        <div class="col mb-3">
            <form class="d-flex mb-4" action="{{ route('users.list') }}" method="GET">
                <input class="form-control me-2" type="search" name="search">
                <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
            </form>
        </div>
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
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d/m/Y - H:i:s', strtotime($user->created_at)) }}</td>
                    <td>{{ date('d/m/Y - H:i:s', strtotime($user->updated_at)) }}</td>
                    <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-primary text-dark">Visualizar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class=" container mt-5 justify-content-center pagination">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>

    </div>

</div>





@endsection
