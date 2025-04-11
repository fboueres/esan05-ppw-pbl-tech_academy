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
        <main class="flex-grow-1 d-flex flex-column container mt-3">
            <section></section>
            <section id="Cursos">
                <h1 class="text-center">Cursos</h1>
                <div
                    class="overflow-y-auto overflow-x-hidden px-5 mb-3"
                    style="max-height: 100vh"
                >
                    <div class="row">
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Curso de JavaScript
                                    </h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Deserunt distinctio
                                        soluta sequi repudiandae, aspernatur
                                        quisquam non adipisci voluptatibus quas
                                        perferendis in ab modi totam! Mollitia,
                                        repellendus eveniet! Ducimus, rerum
                                        vitae.
                                    </p>
                                    <a href="#" class="btn btn-primary w-100">
                                        Se inscreva!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Feedback">
                <h1 class="text-center">Feedback</h1>
                <div
                    class="container-fluid py-3 d-flex flex-row flex-nowrap overflow-auto mb-3"
                >
                    <div class="card card-body mx-3" style="min-width: 300px">
                        <h5 class="card-title">Luís Oliveira</h5>
                        <p class="card-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Totam voluptatibus fugiat quibusdam, suscipit
                            sed cumque quidem eaque nemo omnis, id magnam
                            possimus accusantium. Aliquid temporibus tempora
                            odit consequuntur explicabo velit?
                        </p>
                    </div>
                    <div class="card card-body mx-3" style="min-width: 300px">
                        Card
                    </div>
                    <div class="card card-body mx-3" style="min-width: 300px">
                        Card
                    </div>
                    <div class="card card-body mx-3" style="min-width: 300px">
                        Card
                    </div>
                    <div class="card card-body mx-3" style="min-width: 300px">
                        Card
                    </div>
                    <div class="card card-body mx-3" style="min-width: 300px">
                        Card
                    </div>
                    <div class="card card-body mx-3" style="min-width: 300px">
                        Card
                    </div>
                    <div class="card card-body mx-3" style="min-width: 300px">
                        Card
                    </div>
                    <div class="card card-body mx-3" style="min-width: 300px">
                        Card
                    </div>
                </div>
            </section>
            <section id="FAQ" class="mb-3">
                <h1 class="text-center">FAQ</h1>
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
