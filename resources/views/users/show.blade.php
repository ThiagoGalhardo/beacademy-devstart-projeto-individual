@extends('template.index')
@section('title', 'Lista de usuários')
@section('content')

<div class="container-main mt-5 pt-5">

    <div class="container p-5">
        <h2>Usuário</h2>
        <h4>{{ $user->name }}</h4>
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
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                    <td>{{ date('d/m/Y', strtotime($user->updated_at)) }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning text-dark">Editar</a>
                        <form class="d-inline-block" action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger text-dark">Excluir</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <div>
            <a href="{{ route('users.list') }}" class="btn btn-primary btn-lg px-5 btn-block">Voltar</a>
        </div>

    </div>
</div>

@endsection
