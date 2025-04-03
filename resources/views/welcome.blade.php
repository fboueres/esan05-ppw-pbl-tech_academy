<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="pt-5">
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <span class="navbar-brand">Tech Academy</span>
                <ul class="navbar-nav me-auto d-flex flex-row gap-3">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#cursos" class="nav-link">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#sobre" class="nav-link">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a href="#home" class="nav-link">FAQ</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
                    <a
                        href="{{ route("auth.register") }}"
                        class="btn btn-outline-primary"
                    >
                        Cadastrar-se
                    </a>
                    <a
                        href="{{ route("auth.login") }}"
                        class="btn btn-primary"
                    >
                        Login
                    </a>
                </ul>
            </div>
        </nav>
        <main>
            <section id="sobre">
                <div class="row m-0 mb-3">
                    <div class="col-4 p-5">
                        <img
                            src="/caio_coimbra_eh_gay.png"
                            alt="Logo"
                            class="img-fluid"
                        />
                    </div>
                    <div
                        class="col-8 d-flex flex-column justify-content-center"
                    >
                        <h2>Aprenda Programação!</h2>
                        <h4 class="text-body-secondary">
                            Domine as principais linguagens do mercado.
                        </h4>
                        <div class="text-wrap text-right">
                            As linguagens de programação são a base do
                            desenvolvimento de softwares, aplicativos e sistemas
                            inovadores.
                            <br />
                            Em um site de cursos de tecnologia, você pode
                            aprender desde as mais populares, como Python,
                            JavaScript e Java, até as mais especializadas, como
                            Rust e Go.
                            <br />
                            Cada linguagem tem suas particularidades e
                            aplicações, permitindo que você escolha a que melhor
                            se adapta aos seus objetivos profissionais. Com
                            materiais didáticos interativos, exercícios práticos
                            e projetos reais, os cursos online proporcionam um
                            aprendizado dinâmico e eficiente.
                            <br />
                            Seja para iniciar na programação ou aprimorar suas
                            habilidades, dominar novas linguagens abre portas
                            para oportunidades em diversas áreas da tecnologia,
                            como desenvolvimento web, mobile, inteligência
                            artificial e segurança digital.
                        </div>
                    </div>
                </div>
            </section>
            <section id="cursos" class="container vh-100">
                <h1 class="text-center">Cursos</h1>
                <div class="row m-0 overflow-auto mh-100">
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Javascript</h5>
                                <p class="card-text">
                                    JavaScript é essencial para o
                                    desenvolvimento web, permitindo a criação de
                                    sites interativos e dinâmicos.
                                </p>
                                <a href="#" class="btn btn-primary">
                                    Ir ao curso
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Python</h5>
                                <p class="card-text">
                                    Python é famosa por sua simplicidade e
                                    versatilidade, sendo muito utilizada em
                                    áreas como ciência de dados, inteligência
                                    artificial e automação.
                                </p>
                                <a href="/cursos/" class="btn btn-primary">
                                    Ir ao curso
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Java</h5>
                                <p class="card-text">
                                    Java é conhecida pela sua robustez e é
                                    comumente usada no desenvolvimento de
                                    aplicativos empresariais e sistemas Android.
                                </p>
                                <a href="/cursos/" class="btn btn-primary">
                                    Ir ao curso
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Java</h5>
                                <p class="card-text">
                                    Java é conhecida pela sua robustez e é
                                    comumente usada no desenvolvimento de
                                    aplicativos empresariais e sistemas Android.
                                </p>
                                <a href="/cursos/" class="btn btn-primary">
                                    Ir ao curso
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Javascript</h5>
                                <p class="card-text">
                                    JavaScript é essencial para o
                                    desenvolvimento web, permitindo a criação de
                                    sites interativos e dinâmicos.
                                </p>
                                <a href="#" class="btn btn-primary">
                                    Ir ao curso
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Python</h5>
                                <p class="card-text">
                                    Python é famosa por sua simplicidade e
                                    versatilidade, sendo muito utilizada em
                                    áreas como ciência de dados, inteligência
                                    artificial e automação.
                                </p>
                                <a href="/cursos/" class="btn btn-primary">
                                    Ir ao curso
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Java</h5>
                                <p class="card-text">
                                    Java é conhecida pela sua robustez e é
                                    comumente usada no desenvolvimento de
                                    aplicativos empresariais e sistemas Android.
                                </p>
                                <a href="/cursos/" class="btn btn-primary">
                                    Ir ao curso
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Java</h5>
                                <p class="card-text">
                                    Java é conhecida pela sua robustez e é
                                    comumente usada no desenvolvimento de
                                    aplicativos empresariais e sistemas Android.
                                </p>
                                <a href="/cursos/" class="btn btn-primary">
                                    Ir ao curso
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="feedback mb-3 vh1">
                <div class="row d-flex justify-content-between m-0">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Javascript</h5>
                                <p class="card-text">
                                    JavaScript é essencial para o
                                    desenvolvimento web, permitindo a criação de
                                    sites interativos e dinâmicos.
                                </p>
                                <a href="#" class="btn btn-primary">
                                    Ir ao curso
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Javascript</h5>
                                <p class="card-text">
                                    JavaScript é essencial para o
                                    desenvolvimento web, permitindo a criação de
                                    sites interativos e dinâmicos.
                                </p>
                                <a href="#" class="btn btn-primary">
                                    Ir ao curso
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
