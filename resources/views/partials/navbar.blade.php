<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <span class="navbar-brand">Tech Academy</span>
        <ul class="navbar-nav me-auto d-flex flex-row gap-3">
            <li class="nav-item">
                <a href="#home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#cursos" class="nav-link">Cursos</a>
            </li>
        </ul>
        <div class="dropdown ms-auto">
            <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
            >
                {{ Auth::user()->name }}
            </button>
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
