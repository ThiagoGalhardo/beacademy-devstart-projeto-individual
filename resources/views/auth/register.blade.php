@extends('template.index')
@section('title', 'Registrar')
@section('content')

<main class="container-main mt-5 pt-5">

    <div class=" mt-5 ">
        <h3 class="text-center">Registrar</h3>
    </div>
    <div class="container p-3 d-flex justify-content-center">






        <div class="card" style="width: 20rem;">

            <div class="card-body">
                <form class="needs-validation" method="POST" action="{{ route('register') }}" novalidate>
                    @method('POST')
                    @csrf

                    <!-- <div class="mb-3">
                        <label for="name" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div> -->
                    <!-- Session Status -->
                    <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->



                    <div class="">
                        <label for="name" class="form-label">Nome completo</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>

                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>



                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
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
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirme a Senha</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>

                    </div>

                    <div>
                        <a class="me-3" href="{{ route('login') }}">Já possui uma conta?</a>
                        <button type="submit" class="btn btn-primary ms-3">Registrar</button>
                    </div>

                </form>
            </div>
        </div>


    </div>

</main>
@endsection
