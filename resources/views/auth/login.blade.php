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
            <form action="#" method="POST">
                <div class="form-group mb-3">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="E-mail"
                        required
                    />
                </div>

                <div class="form-group mb-3">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        placeholder="Senha"
                        required
                    />
                </div>

                <div class="row mb-3 w-100">
                    <div class="col-6 d-flex justify-content-center">
                        <div class="form-check">
                            <input
                                type="checkbox"
                                name="remember-me"
                                id="remember-me"
                                class="form-check-input"
                                aria-label="Remember me"
                            />
                            <label for="remember-me" class="form-check-label">
                                Lembrar de mim
                            </label>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <a href="#">Esqueci minha senha</a>
                    </div>
                </div>

                <div class="w-100 d-flex justify-content-center mb-3">
                    <button
                        type="submit"
                        class="btn btn-primary btn-block w-75"
                    >
                        Entrar
                    </button>
                </div>

                <div class="w-100 d-flex justify-content-center">
                    <span class="text-center">
                        Não tem uma conta?
                        <a href="#">Cadastrar-se</a>
                    </span>
                </div>
            </form>
        </section>
    </body>
</html>
