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
            <d class="container-fluid">
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
                        <a href="#feedback" class="nav-link">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a href="#faq" class="nav-link">FAQ</a>
                    </li>
                </ul>
                @auth
                <div class="dropdown ms-auto">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('user.profile') }}">Perfil</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>
                    </ul>
                </div>
                @else
                <div class="navbar-nav ms-auto d-flex flex-row gap-3">
                    <li class="nav-item">
                        <a
                            href="{{ route("register") }}"
                            class="btn btn-outline-primary"
                        >
                            Cadastrar-se
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            href="{{ route("login") }}"
                            class="btn btn-primary"
                        >
                            Login
                        </a>
                    </li>
                </div>
                @endauth
            </d iv>
        </nav>
        <main>
            <section id="sobre" class="container mb-3 py-5">
                <div class="row m-0">
                    <div class="col-4">
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
            <section id="cursos" class="container vh-100 mb-3 py-5">
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
            <section id="feedback" class="container-fluid mb-3 py-5">
                <h1 class="text-center mb-3">Feedback dos alunos</h1>
                <div
                    class="d-flex gap-3 p-3"
                    style="
                        overflow-x: auto;
                        max-width: 100vw;
                        flex-wrap: nowrap;
                    "
                >
                    <div class="card" style="min-width: 250px">
                        <div class="card-body">
                            <div class="card-title fw-bold">
                                <img
                                    src="/caio_coimbra_eh_viado.svg"
                                    alt="User Picture"
                                    class="rounded-circle"
                                    width="40"
                                    height="40"
                                />
                                Lucas Almeida
                            </div>
                            <div class="card-text fst-italic">
                                "Os cursos são muito bem estruturados e fáceis
                                de acompanhar. Aprendi JavaScript do zero e já
                                estou desenvolvendo meus próprios projetos!"
                            </div>
                        </div>
                    </div>
                    <div class="card" style="min-width: 250px">
                        <div class="card-body">
                            <div class="card-title fw-bold">Lucas Almeida</div>
                            <div class="card-text fst-italic">
                                "Os cursos são muito bem estruturados e fáceis
                                de acompanhar. Aprendi JavaScript do zero e já
                                estou desenvolvendo meus próprios projetos!"
                            </div>
                        </div>
                    </div>
                    <div class="card" style="min-width: 250px">
                        <div class="card-body">
                            <div class="card-title fw-bold">Maria Silva</div>
                            <div class="card-text fst-italic">
                                "A metodologia de ensino é excelente! Consegui
                                aprender Python de forma prática e rápida. Muito
                                satisfeito com o conteúdo!"
                            </div>
                        </div>
                    </div>

                    <div class="card" style="min-width: 250px">
                        <div class="card-body">
                            <div class="card-title fw-bold">Carlos Souza</div>
                            <div class="card-text fst-italic">
                                "As aulas são dinâmicas e envolventes. Hoje, me
                                sinto confortável para trabalhar com front-end
                                graças a essa plataforma!"
                            </div>
                        </div>
                    </div>

                    <div class="card" style="min-width: 250px">
                        <div class="card-body">
                            <div class="card-title fw-bold">Ana Costa</div>
                            <div class="card-text fst-italic">
                                "Estou encantada com o material didático.
                                Aprender HTML e CSS foi muito mais fácil do que
                                imaginei!"
                            </div>
                        </div>
                    </div>

                    <div class="card" style="min-width: 250px">
                        <div class="card-body">
                            <div class="card-title fw-bold">Bruno Martins</div>
                            <div class="card-text fst-italic">
                                "O curso de React é incrível! Eu nunca havia
                                programado antes e agora já desenvolvo minhas
                                próprias aplicações!"
                            </div>
                        </div>
                    </div>

                    <div class="card" style="min-width: 250px">
                        <div class="card-body">
                            <div class="card-title fw-bold">
                                Juliana Pereira
                            </div>
                            <div class="card-text fst-italic">
                                "A aprendizagem é bem estruturada e a interação
                                com a comunidade de alunos é ótima. Me senti
                                motivada o tempo todo!"
                            </div>
                        </div>
                    </div>

                    <div class="card" style="min-width: 250px">
                        <div class="card-body">
                            <div class="card-title fw-bold">Felipe Rocha</div>
                            <div class="card-text fst-italic">
                                "Os professores são muito capacitados. Graças ao
                                curso, estou dominando a criação de APIs e banco
                                de dados com Node.js!"
                            </div>
                        </div>
                    </div>

                    <div class="card" style="min-width: 250px">
                        <div class="card-body">
                            <div class="card-title fw-bold">
                                Isabela Ferreira
                            </div>
                            <div class="card-text fst-italic">
                                "Nunca pensei que aprender Java fosse tão
                                acessível. Os exercícios práticos me ajudaram a
                                fixar bem o conteúdo!"
                            </div>
                        </div>
                    </div>

                    <div class="card" style="min-width: 250px">
                        <div class="card-body">
                            <div class="card-title fw-bold">
                                Ricardo Almeida
                            </div>
                            <div class="card-text fst-italic">
                                "A experiência de aprender aqui é única. As
                                aulas de Git e GitHub foram cruciais para o meu
                                desenvolvimento profissional!"
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="faq" class="container mb-3">
                <h1 class=" text-center mb-3">FAQ</h1>
                <div class="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne"
                                aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne"
                            >
                                Os cursos possuem certificado?
                            </button>
                        </h2>
                        <div
                            id="panelsStayOpen-collapseOne"
                            class="accordion-collapse collapse"
                        >
                            <div class="accordion-body">
                                <strong>Sim!</strong>
                                Ao concluir um curso e atingir a pontuação
                                mínima nos exercícios e avaliações, você pode
                                emitir um certificado válido, que pode ser usado
                                para enriquecer seu currículo e perfil
                                profissional.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo"
                            >
                                Preciso ter conhecimento prévio para começar?
                            </button>
                        </h2>
                        <div
                            id="panelsStayOpen-collapseTwo"
                            class="accordion-collapse collapse"
                        >
                            <div class="accordion-body">
                                <strong>Não!</strong>
                                Nossa plataforma oferece cursos para todos os
                                níveis, desde iniciantes sem experiência até
                                profissionais que desejam se aprofundar em
                                tecnologias avançadas.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree"
                            >
                                Os cursos são pagos ou gratuitos?
                            </button>
                        </h2>
                        <div
                            id="panelsStayOpen-collapseThree"
                            class="accordion-collapse collapse"
                        >
                            <div class="accordion-body">
                                <strong>Temos cursos gratuitos e pagos.</strong>
                                Os gratuitos oferecem um conteúdo introdutório,
                                enquanto os pagos trazem materiais mais
                                aprofundados, exercícios práticos e suporte
                                personalizado.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFour"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFour"
                            >
                                Como funciona o suporte para dúvidas?
                            </button>
                        </h2>
                        <div
                            id="panelsStayOpen-collapseFour"
                            class="accordion-collapse collapse"
                        >
                            <div class="accordion-body">
                                <strong>
                                    Os alunos podem tirar dúvidas nos fóruns da
                                    plataforma
                                </strong>
                                , onde instrutores e outros alunos ajudam a
                                responder. Nos cursos pagos, há suporte
                                prioritário com respostas mais rápidas e
                                detalhadas.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFive"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFive"
                            >
                                Posso acessar os cursos no meu celular ou
                                tablet?
                            </button>
                        </h2>
                        <div
                            id="panelsStayOpen-collapseFive"
                            class="accordion-collapse collapse"
                        >
                            <div class="accordion-body">
                                <strong>Sim!</strong>
                                Nossa plataforma é responsiva e também temos um
                                aplicativo para Android e iOS, permitindo que
                                você estude de qualquer lugar.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseSix"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseSix"
                            >
                                Qual a duração dos cursos?
                            </button>
                        </h2>
                        <div
                            id="panelsStayOpen-collapseSix"
                            class="accordion-collapse collapse"
                        >
                            <div class="accordion-body">
                                <strong>
                                    Cada curso tem uma carga horária diferente.
                                </strong>
                                Alguns cursos podem ser concluídos em algumas
                                horas, enquanto outros mais completos levam
                                semanas. Você pode estudar no seu próprio ritmo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseSeven"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseSeven"
                            >
                                Posso cancelar minha assinatura a qualquer
                                momento?
                            </button>
                        </h2>
                        <div
                            id="panelsStayOpen-collapseSeven"
                            class="accordion-collapse collapse"
                        >
                            <div class="accordion-body">
                                <strong>Sim!</strong>
                                Você pode cancelar a assinatura a qualquer
                                momento, sem taxas adicionais. Caso tenha pago
                                antecipadamente, poderá acessar o conteúdo até o
                                final do período contratado.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="d-flex flex-wrap justify-content-between align-items-center p-3  my-4 border-top">
              <span class="mb-3 text-body-secondary">©2025 Tech Academy</span>
          </footer>
    </body>
</html>
