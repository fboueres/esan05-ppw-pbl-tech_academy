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
                    <a class="dropdown-item" href="{{ route("logout") }}">
                        Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
