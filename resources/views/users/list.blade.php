@extends('template.index')
@section('title', 'Lista de usuários')
@section('content')

<div class="container-main mt-5 pt-5">

    <div class="container mt-5">
        <h1>Lista de usuários</h1>
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
    </div>

</div>



@endsection
