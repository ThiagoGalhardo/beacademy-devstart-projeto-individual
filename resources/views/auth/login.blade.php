@extends('template.index')
@section('title', 'Entrar')
@section('content')

<main class="container-main mt-5 pt-5">

    <div class="container p-5 d-flex justify-content-center">

        <div class="card mt-5" style="width: 25rem;">
            <h3 class="text-center fs-4 mt-2">Entrar</h3>
            <div class="card-body">
                <form class="needs-validation" method="POST" action="{{ route('login') }}" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>

                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div>
                        <a class="me-3" href="{{ route('password.request') }}">Esqueceu a senha?</a>
                        <button type="submit" class="btn btn-primary ms-5 px-5">Entrar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="text-center p-2 mt-5 ms-5">
            <h3 class="fs-5">Não possui uma conta?</h3>
            <a href="/register" class="btn btn-primary text-center">Criar agora</a>
        </div>
    </div>

</main>
@endsection
