@extends("layouts.app")
@section("title", "Cursos")
@section("content")
    <section>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="text-center mb-0">Cursos Disponíveis</h3>
            <a href="{{ route("courses.create") }}" class="btn btn-success">
                + Novo Curso
            </a>
        </div>
        <div class="row row-cols-3 g-3">
            @forelse ($courses as $course)
                <div class="col">
                    <div class="card h-100 shadow-sm position-relative">
                        <div class="card-body d-flex flex-column">
                            <div
                                class="d-flex justify-content-between align-items-start mb-3"
                            >
                                <h5 class="card-title mb-0">
                                    {{ $course->name }}
                                </h5>
                                <div class="dropdown">
                                    <button
                                        class="btn btn-sm btn-close p-2"
                                        type="button"
                                        id="dropdownMenuButton-{{ $course->id }}"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    ></button>
                                    <ul
                                        class="dropdown-menu dropdown-menu-end mt-2"
                                        aria-labelledby="dropdownMenuButton-{{ $course->id }}"
                                    >
                                        <li>
                                            <a
                                                class="dropdown-item"
                                                href="{{ route("courses.modules.index", $course->id) }}"
                                            >
                                                Módulos
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                class="dropdown-item"
                                                href="{{ route("courses.edit", $course->id) }}"
                                            >
                                                Editar Curso
                                            </a>
                                        </li>
                                        <li>
                                            <form
                                                action="{{ route("courses.destroy", $course->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Tem certeza que deseja excluir este curso?')"
                                            >
                                                @csrf
                                                @method("DELETE")
                                                <button
                                                    type="submit"
                                                    class="dropdown-item text-danger"
                                                >
                                                    Excluir
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <p class="card-text text-muted flex-grow-1">
                                {{ \Illuminate\Support\Str::limit($course->description, 100) }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-info">Nenhum curso encontrado.</div>
                </div>
            @endforelse
        </div>
    </section>
@endsection
