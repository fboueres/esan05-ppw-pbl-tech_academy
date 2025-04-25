@extends("auth.layout")
@section("title", "Cadastrar-se")
@section("content")
    <header>
        <h1 class="mb-3 text-center">Tech Academy</h1>
    </header>

    <section class="form-section w-75">
        <form action="{{ route("register") }}" method="POST">
            @csrf
            @method("POST")
            <x-form.input-text name="name" label="Nome" required>
                @error("name")
                    <div class="form-text text-danger ms-2">
                        Algo deu errado, verifique suas credencias e tente
                        novamente
                    </div>
                @enderror
            </x-form.input-text>

            <x-form.input-text
                type="email"
                name="email"
                label="E-mail"
                required
            >
                @error("email")
                    <div class="form-text text-danger ms-2">
                        Algo deu errado, verifique suas credencias e tente
                        novamente
                    </div>
                @enderror
            </x-form.input-text>

            <x-form.input-text
                type="password"
                name="password"
                label="Senha"
                required
            >
                @error("password")
                    <div class="form-text text-danger ms-2">
                        Sua senha deve ter, no mínimo, 8 caracteres
                    </div>
                @enderror
            </x-form.input-text>

            <div class="w-100 d-flex justify-content-center mb-3">
                <button type="submit" class="btn btn-primary btn-block w-75">
                    Cadastrar-se
                </button>
            </div>

            <div class="w-100 d-flex justify-content-center">
                <span class="text-center">
                    Já tem uma conta?
                    <a href="{{ route("login") }}">Login</a>
                </span>
            </div>
        </form>
    </section>
@endsection
