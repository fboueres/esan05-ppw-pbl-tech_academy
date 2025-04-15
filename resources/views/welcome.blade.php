<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Tech Academy</title>

        @vite(["resources/scss/app.scss", "resources/js/app.js"])
    </head>
    <body class="d-flex flex-column min-vh-100">
        <nav class="navbar navbar-expand bg-body-tertiary mb-3">
            <div class="container">
                <a class="navbar-brand" href="/welcome">Tech Academy</a>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="#Cursos" class="nav-link">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Sobre" class="nav-link">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Feedback" class="nav-link">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a href="#FAQ" class="nav-link">FAQ</a>
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
                            {{ Auth::user()->name }}
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
                    <div class="navbar-nav ms-auto d-flex flex-row gap-1">
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
            </div>
        </nav>
        <main>
            <section id="Sobre" class="container mb-3">
                <div class="row align-items-center">
                    <div class="col-6 mb-3">
                        <img
                            src="/picture.png"
                            alt="Ilustração de programação"
                            class="img-fluid rounded shadow-sm w-75 p-3"
                        />
                    </div>
            
                    <div class="col-6">
                        <h2>Aprenda Programação!</h2>
                        <h4 class="text-body-secondary mb-3">
                            Domine as principais linguagens do mercado.
                        </h4>
                        <div class="text-wrap">
                            <p>
                                As linguagens de programação são a base do desenvolvimento
                                de softwares, aplicativos e sistemas inovadores.
                            </p>
                            <p>
                                Em um site de cursos de tecnologia, você pode aprender desde
                                as mais populares, como Python, JavaScript e Java, até as
                                mais especializadas, como Rust e Go.
                            </p>
                            <p>
                                Cada linguagem tem suas particularidades e aplicações,
                                permitindo que você escolha a que melhor se adapta aos seus
                                objetivos profissionais. Com materiais didáticos
                                interativos, exercícios práticos e projetos reais, os cursos
                                online proporcionam um aprendizado dinâmico e eficiente.
                            </p>
                            <p>
                                Seja para iniciar na programação ou aprimorar suas
                                habilidades, dominar novas linguagens abre portas para
                                oportunidades em diversas áreas da tecnologia, como
                                desenvolvimento web, mobile, inteligência artificial e
                                segurança digital.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section
                id="Cursos"
                class="container mb-3 d-flex flex-column"
                style="max-height: 100vh"
            >
                <h1 class="text-center mb-3 flex-shrink-0">Nossos Cursos!</h1>
                <div class="row row-cols-3 g-3 overflow-y-auto">
                    @foreach (App\Models\Course::all() as $course)
                        <div class="col">
                            <div class="card shadow-sm position-relative">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title mb-0">
                                        {{ $course->name }}
                                    </h5>
                                    <div
                                        class="d-flex justify-content-between align-items-start mb-3"
                                    ></div>
                                    <p class="card-text text-muted flex-grow-1">
                                        {{ \Illuminate\Support\Str::limit($course->description, 100) }}
                                    </p>
                                    <a
                                        href="{{ route("courses.modules.index", $course) }}"
                                        class="btn btn-primary"
                                    >
                                        Faça agora!
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <section id="Feedback" class="container mb-3">
                <h1 class="text-center mb-3">Feedback</h1>
                <div
                    class="d-flex gap-3 px-3 pb-3 overflow-x-auto flex-nowrap"
                    style="max-width: 100vw; scroll-snap-type: x mandatory"
                >
                    @foreach ([
                            [
                                "name" => "Lucas Almeida",
                                "text" =>
                                    "Os cursos são muito bem estruturados e fáceis de acompanhar. Aprendi JavaScript do zero e já estou desenvolvendo meus próprios projetos!"
                            ],
                            [
                                "name" => "Maria Silva",
                                "text" =>
                                    "A metodologia de ensino é excelente! Consegui aprender Python de forma prática e rápida. Muito satisfeito com o conteúdo!"
                            ],
                            [
                                "name" => "Carlos Souza",
                                "text" =>
                                    "As aulas são dinâmicas e envolventes. Hoje, me sinto confortável para trabalhar com front-end graças a essa plataforma!"
                            ],
                            [
                                "name" => "Ana Costa",
                                "text" =>
                                    "Estou encantada com o material didático. Aprender HTML e CSS foi muito mais fácil do que imaginei!"
                            ],
                            [
                                "name" => "Bruno Martins",
                                "text" =>
                                    "O curso de React é incrível! Eu nunca havia programado antes e agora já desenvolvo minhas próprias aplicações!"
                            ],
                            [
                                "name" => "Juliana Pereira",
                                "text" =>
                                    "A aprendizagem é bem estruturada e a interação com a comunidade de alunos é ótima. Me senti motivada o tempo todo!"
                            ],
                            [
                                "name" => "Felipe Rocha",
                                "text" =>
                                    "Os professores são muito capacitados. Graças ao curso, estou dominando a criação de APIs e banco de dados com Node.js!"
                            ],
                            [
                                "name" => "Isabela Ferreira",
                                "text" =>
                                    "Nunca pensei que aprender Java fosse tão acessível. Os exercícios práticos me ajudaram a fixar bem o conteúdo!"
                            ],
                            [
                                "name" => "Ricardo Almeida",
                                "text" =>
                                    "A experiência de aprender aqui é única. As aulas de Git e GitHub foram cruciais para o meu desenvolvimento profissional!"
                            ]
                        ]
                        as $feedback)
                        <div
                            class="card flex-shrink-0 w-25"
                            style="min-width: 250px; scroll-snap-align: start"
                        >
                            <div class="card-body">
                                <div class="card-title fw-bold">
                                    {{ $feedback["name"] }}
                                </div>
                                <div class="card-text fst-italic">
                                    "{{ $feedback["text"] }}"
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <section id="FAQ" class="container mb-3">
                <h1 class="text-center mb-3">FAQ - Perguntas Frequentes</h1>

                <div class="accordion" id="faqAccordion">
                    @php
                        $faq = [
                            [
                                "id" => "One",
                                "question" => "Os cursos possuem certificado?",
                                "answer" => "<strong>Sim!</strong> Ao concluir um curso e atingir a pontuação mínima nos exercícios e avaliações, você pode emitir um certificado válido, que pode ser usado para enriquecer seu currículo e perfil profissional.",
                            ],
                            [
                                "id" => "Two",
                                "question" => "Preciso ter conhecimento prévio para começar?",
                                "answer" => "<strong>Não!</strong> Nossa plataforma oferece cursos para todos os níveis, desde iniciantes sem experiência até profissionais que desejam se aprofundar em tecnologias avançadas.",
                            ],
                            [
                                "id" => "Three",
                                "question" => "Os cursos são pagos ou gratuitos?",
                                "answer" => "<strong>Temos cursos gratuitos e pagos.</strong> Os gratuitos oferecem um conteúdo introdutório, enquanto os pagos trazem materiais mais aprofundados, exercícios práticos e suporte personalizado.",
                            ],
                            [
                                "id" => "Four",
                                "question" => "Como funciona o suporte para dúvidas?",
                                "answer" => "<strong>Os alunos podem tirar dúvidas nos fóruns da plataforma</strong>, onde instrutores e outros alunos ajudam a responder. Nos cursos pagos, há suporte prioritário com respostas mais rápidas e detalhadas.",
                            ],
                            [
                                "id" => "Five",
                                "question" => "Posso acessar os cursos no meu celular ou tablet?",
                                "answer" => "<strong>Sim!</strong> Nossa plataforma é responsiva e também temos um aplicativo para Android e iOS, permitindo que você estude de qualquer lugar.",
                            ],
                            [
                                "id" => "Six",
                                "question" => "Qual a duração dos cursos?",
                                "answer" => "<strong>Cada curso tem uma carga horária diferente.</strong> Alguns cursos podem ser concluídos em algumas horas, enquanto outros mais completos levam semanas. Você pode estudar no seu próprio ritmo.",
                            ],
                            [
                                "id" => "Seven",
                                "question" => "Posso cancelar minha assinatura a qualquer momento?",
                                "answer" => "<strong>Sim!</strong> Você pode cancelar a assinatura a qualquer momento, sem taxas adicionais. Caso tenha pago antecipadamente, poderá acessar o conteúdo até o final do período contratado.",
                            ],
                        ];
                    @endphp

                    @foreach ($faq as $item)
                        <div class="accordion-item">
                            <h2
                                class="accordion-header"
                                id="heading{{ $item["id"] }}"
                            >
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $item["id"] }}"
                                    aria-expanded="false"
                                    aria-controls="collapse{{ $item["id"] }}"
                                >
                                    {{ $item["question"] }}
                                </button>
                            </h2>
                            <div
                                id="collapse{{ $item["id"] }}"
                                class="accordion-collapse collapse"
                                aria-labelledby="heading{{ $item["id"] }}"
                                data-bs-parent="#faqAccordion"
                            >
                                <div class="accordion-body">
                                    {!! $item["answer"] !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>
        @include("partials.footer")
    </body>
</html>
