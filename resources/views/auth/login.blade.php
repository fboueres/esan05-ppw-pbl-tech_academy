@extends("auth.layout")
@section("title", "Login")
@section("content")
    <header>
        <h1 class="mb-3 text-center">Tech Academy</h1>
    </header>

    <section class="form-section w-75">
        <form action="{{ route("login") }}" method="POST">
            @csrf
            @method("POST")
            <x-form.input-text
                type="email"
                name="email"
                label="E-mail"
                required
            >
                @if ($errors->any())
                    <div class="form-text text-danger ms-2">
                        Algo deu errado, verifique suas credenciais e tente
                        novamente.
                    </div>
                @endif()
            </x-form.input-text>
            <x-form.input-text
                type="password"
                name="password"
                label="Senha"
                required
            />

            <div class="row mb-3 w-100">
                <div class="col-6 d-flex justify-content-center">
                    <div class="form-check">
                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            class="form-check-input"
                        />
                        <label for="remember" class="form-check-label">
                            Lembrar de mim
                        </label>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <a href="#">Esqueci minha senha</a>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-center mb-3">
                <button type="submit" class="btn btn-primary btn-block w-75">
                    Entrar
                </button>
            </div>

            <div class="w-100 d-flex justify-content-center">
                <span class="text-center">
                    Não tem uma conta?
                    <a href="{{ route("register") }}">Cadastrar-se</a>
                </span>
            </div>
        </form>
    </section>
@endsection
