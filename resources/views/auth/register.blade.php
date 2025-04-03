<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body
        class="container d-flex flex-column w-50 min-vh-100 align-items-center justify-content-center"
    >
        <header>
            <h1 class="mb-3 text-center">Tech Academy</h1>
        </header>

        <section class="form-section w-75">
            <form action="{{ route("auth.register") }}" method="POST">
                @csrf
                @method("POST")
                <div class="form-group mb-3">
                    <input
                        type="name"
                        name="name"
                        id="name"
                        class="form-control @error("name") is-invalid @enderror"
                        placeholder="Seu nome"
                        value="{{ old("name") }}"
                        required
                    />
                    @error("name")
                        <div class="form-text text-danger ms-2">
                            Algo deu errado, verifique suas credencias e tente
                            novamente
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control @error("email") is-invalid @enderror"
                        placeholder="E-mail"
                        value="{{ old("email") }}"
                        required
                    />
                    @error("email")
                        <div class="form-text text-danger ms-2">
                            Algo deu errado, verifique suas credencias e tente
                            novamente
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control @error("password") is-invalid @enderror"
                        placeholder="Senha"
                        required
                    />
                    @error("password")
                        <div class="form-text text-danger ms-2">
                            Sua senha deve ter, no mínimo, 8 caracteres
                        </div>
                    @enderror
                </div>

                <div class="w-100 d-flex justify-content-center mb-3">
                    <button
                        type="submit"
                        class="btn btn-primary btn-block w-75"
                    >
                        Cadastrar-se
                    </button>
                </div>

                <div class="w-100 d-flex justify-content-center">
                    <span class="text-center">
                        Já tem uma conta?
                        <a href="{{ route("auth.login") }}">Login</a>
                    </span>
                </div>
            </form>
        </section>
    </body>
</html>
