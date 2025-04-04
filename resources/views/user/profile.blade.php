<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">Seu perfil</h3>
                <div class="form-group mb-3">
                    <div class="form-group mb-3">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control @error("name") is-invalid @enderror"
                            placeholder="Seu nome"
                            value="{{ old("name", Auth::user()->name) }}"
                            required
                        />
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="form-group mb-3">
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control @error("email") is-invalid @enderror"
                            placeholder="Seu nome"
                            value="{{ old("email", Auth::user()->email) }}"
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
                            name="old_password"
                            id="old_password"
                            class="form-control"
                            placeholder="Sua senha atinga"
                            required
                        />
                    </div>
                    <div class="form-group mb-3">
                        <input
                            type="password"
                            name="new_password"
                            id="new_password"
                            class="form-control @error("new_password") is-invalid @enderror"
                            placeholder="Senha"
                            required
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
                            placeholder="Senha"
                            required
                        />
                        @error("new_password_confirmation")
                            <div class="form-text text-danger ms-2">
                                Preencha os dois campos com a sua nova senha
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>