@extends("layouts.app")

@section("title", "Módulos - " . $course->name)

@section("content")
    <section>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0">Módulos de {{ $course->name }}</h3>
            <a
                href="{{ route("courses.modules.create", $course) }}"
                class="btn btn-success"
            >
                + Novo Módulo
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

        @if ($modules->isEmpty())
            <div class="alert alert-info">
                Nenhum módulo cadastrado para este curso ainda.
            </div>
        @else
            <div class="list-group">
                @foreach ($modules->sortBy("order") as $module)
                    <div class="list-group-item">
                        <div
                            class="d-flex justify-content-between align-items-start"
                        >
                            <div>
                                <h5 class="mb-1">
                                    <span class="badge bg-primary me-2">
                                        #{{ $module->order }}
                                    </span>
                                    {{ $module->name }}
                                </h5>
                                @include("lessons.index")
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <a
                                    href="{{ route("courses.modules.lessons.create", [$course, $module]) }}"
                                    class="btn btn-sm btn-outline-success"
                                >
                                    + Nova Aula
                                </a>
                                <a
                                    href="{{ route("courses.modules.edit", [$course, $module]) }}"
                                    class="btn btn-sm btn-outline-primary"
                                >
                                    Editar Módulo
                                </a>
                                <form
                                    action="{{ route("courses.modules.destroy", [$course, $module]) }}"
                                    method="POST"
                                    onsubmit="return confirm('Deseja realmente excluir este módulo?')"
                                >
                                    @csrf
                                    @method("DELETE")
                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-outline-danger"
                                    >
                                        Excluir Módulo
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
