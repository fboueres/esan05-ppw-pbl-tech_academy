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
            <div class="form-floating mb-3">
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control @error("name") is-invalid @enderror"
                    placeholder="Nome"
                    value="{{ old("name") }}"
                    required
                />
                <label for="name">Nome</label>
                @error("name")
                    <div class="form-text text-danger ms-2">
                        Algo deu errado, verifique suas credencias e tente
                        novamente
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control @error("email") is-invalid @enderror"
                    placeholder="E-mail"
                    value="{{ old("email") }}"
                    required
                />
                <label for="email">E-mail</label>
                @error("email")
                    <div class="form-text text-danger ms-2">
                        Algo deu errado, verifique suas credencias e tente
                        novamente
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control @error("password") is-invalid @enderror"
                    placeholder="Senha"
                    required
                />
                <label for="password">Senha</label>
                @error("password")
                    <div class="form-text text-danger ms-2">
                        Sua senha deve ter, no mínimo, 8 caracteres
                    </div>
                @enderror
            </div>

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
