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
                @foreach($order as $thisOrder)
                <form class="" method="POST" action="{{ route('orders.update', $thisOrder->id) }}" novalidate>
                    @method('PUT')
                    @csrf

                    <tr>
                        <th scope="row">{{ $thisOrder->id }}</th>
                        <td>{{ $thisOrder->user_id }}</td>
                        <td>{{ $thisOrder->service_name }}</td>
                        <td>{{ $thisOrder->price }}</td>
                        <!-- <td>{{ $thisOrder->status }}</td> -->
                        <td> <select id="status" name="status" class="form-select" value="{{$thisOrder->status}}">
                                <option selected value="{{$thisOrder->status}}">{{$thisOrder->status}}</option>
                                <option value="Analisando pagamento">Analisando pagamento</option>
                                <option value="Pagamento aprovado">Pagamento aprovado</option>
                                <option value="Declaração em andamento">Declaração em andamento</option>
                                <option value="Pedido cancelado">Pedido cancelado</option>
                                <option value="Pedido concluído">Pedido concluído</option>
                        </td>

                        <!-- <td> <input type="text" value="{{ $thisOrder->status }}"></td> -->
                        <td>{{ $thisOrder->created_at }}</td>
                        <td>{{ $thisOrder->update_at }}</td>
                        <td>



                            <div class="d-flex justify-content-around">
                                <a href="{{ route('users.show', $thisOrder->user_id)}}" class="btn btn-danger me-3">Cancelar</a>
                                <button type="submit" class="btn btn-success ">Atualizar</button>
                            </div>

                        </td>
                    </tr>

                    @endforeach
                </form>
            </tbody>
        </table>
        <div class="row mb-5">
            <div class="col-12">
                @if($thisOrder->form_id)
                <p>Formulário</p>
                <a href="{{ route('form.pdf', $thisOrder->form_id)}}" class="btn btn-outline-success text-dark mb-3">Baixar Formulário</a>


                <p>Documentos</p>

                @foreach($names as $path)
                <a href="{{ route('file.download', $path)}}" class="btn btn-outline-success text-dark">Documento {{$path}}</a>
                @endforeach

                @endif

            </div>
        </div>
        <hr>

        <a href="{{ route('users.show', $thisOrder->user_id)}}" class="btn btn-primary text-dark">Voltar</a>
    </div>


</div>



@endsection
