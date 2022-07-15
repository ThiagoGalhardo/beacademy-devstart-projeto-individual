@extends('template.index')
@section('title', 'Entrar')
@section('content')

<!-- ============== HERO ============ -->

<main class="container-main mt-5 pt-5">

    <div class=" mt-5 ">
        <h3 class="text-center">Entrar</h3>
    </div>
    <div class="container p-3 d-flex justify-content-center">

        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" :value="__('Email')" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" :value="__('Password')" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div>
                        <a class="me-3" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                        <button type="submit" class="btn btn-primary ms-5">Entrar</button>
                    </div>

                </form>
            </div>
        </div>


    </div>

</main>
@endsection
