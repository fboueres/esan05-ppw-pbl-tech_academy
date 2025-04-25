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
        @if (session("success"))
            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >
                {{ session("success") }}
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Fechar"
                ></button>
            </div>
        @endif

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

                                <div class="d-flex gap-2">
                                    <a
                                        href="{{ route("courses.edit", $course->id) }}"
                                        class="btn btn-sm btn-outline-primary"
                                        title="Editar Curso"
                                    >
                                        Editar
                                    </a>
                                    <form
                                        action="{{ route("courses.destroy", $course->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja excluir este curso?')"
                                    >
                                        @csrf
                                        @method("DELETE")
                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-outline-danger"
                                            title="Excluir Curso"
                                        >
                                            Excluir
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <p class="card-text text-muted flex-grow-1">
                                {{ \Illuminate\Support\Str::limit($course->description, 100) }}
                            </p>

                            <a
                                href="{{ route("courses.modules.index", $course->id) }}"
                                class="btn btn-primary mt-auto"
                            >
                                Ver Módulos
                            </a>
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
