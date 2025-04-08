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
        class="container min-vh-100 min-vw-100 d-flex justify-content-center align-items-center"
    >
        <div class="card w-50">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">Seu perfil</h3>
                <form action="{{ route("user.profile") }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group mb-3">
                        <div class="form-group mb-3">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control @error("name") is-invalid @enderror"
                                placeholder="Seu nome"
                                value="{{ old("name", Auth::user()->name) }}"
                            />
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control @error("email") is-invalid @enderror"
                            placeholder="Seu nome"
                            value="{{ old("email", Auth::user()->email) }}"
                        />
                        @if ($errors->any())
                            <div class="form-text text-danger ms-2">
                                Algo deu errado, verifique suas credencias e
                                tente novamente
                            </div>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input
                            type="password"
                            name="old_password"
                            id="old_password"
                            class="form-control"
                            placeholder="Sua senha atinga"
                        />
                    </div>
                    <div class="form-group mb-3">
                        <input
                            type="password"
                            name="new_password"
                            id="new_password"
                            class="form-control @error("new_password") is-invalid @enderror"
                            placeholder="Sua senha nova"
                        />
                        @error("new_password")
                            <div class="form-text text-danger ms-2">
                                Sua senha deve ter, no mínimo, 8 caracteres
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input
                            type="password"
                            name="new_password_confirmation"
                            id="new_password_confirmation"
                            class="form-control @error("new_password_confirmation") is-invalid @enderror"
                            placeholder="Repita sua nova senha"
                        />
                        @error("new_password")
                            <div class="form-text text-danger ms-2">
                                Preencha os dois campos com a sua nova senha
                            </div>
                        @enderror
                    </div>
                    <div class="w-full d-flex justify-content-end gap-1">
                        <a href="#" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
