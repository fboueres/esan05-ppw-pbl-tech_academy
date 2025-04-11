<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Tech Academy</title>

        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="d-flex flex-column min-vh-100">
        <nav class="navbar navbar-expand bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">Tech Academy</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#Cursos">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Feedback">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#FAQ">FAQ</a>
                    </li>
                </ul>

                @auth
                    <div class="dropdown">
                        <a
                            href="#"
                            class="btn btn-outline-secondary dropdown-toggle"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            User Name
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a
                                    class="dropdown-item"
                                    href="{{ route("user.profile") }}"
                                >
                                    Perfil
                                </a>
                            </li>
                            <li>
                                <a
                                    class="dropdown-item"
                                    href="{{ route("logout") }}"
                                >
                                    Sair
                                </a>
                            </li>
                        </ul>
                    </div>
                @else
                    <a
                        href="{{ route("register") }}"
                        class="btn btn-outline-primary me-2"
                    >
                        Cadastre-se
                    </a>
                    <a href="{{ route("login") }}" class="btn btn-primary">
                        Login
                    </a>
                @endauth
            </div>
        </nav>
        <main class="flex-grow-1 d-flex flex-column container my-3">
            <section></section>
            <section></section>
            <section></section>
        </main>
        <footer class="border-top py-3">
            <div class="container d-flex justify-content-between">
                <span class="text-body-secondary align-content-center">
                    ©2025 Tech Academy
                </span>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Linkedin</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Instagram</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">X</a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>
