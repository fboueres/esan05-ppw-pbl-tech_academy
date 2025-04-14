@if ($module->lessons->isEmpty())
    <p class="text-muted small mb-1">Nenhuma aula cadastrada.</p>
@else
    <ul class="list-group list-group-flush ms-4 mt-2">
        @foreach ($module->lessons->sortBy("order") as $lesson)
            <li
                class="list-group-item px-0 py-3 d-flex justify-content-between align-items-center"
            >
                <div>
                    <span class="text-muted">#{{ $lesson->order }}</span>
                    -
                    <a
                        href="{{ route("courses.modules.lessons.show", [$course, $module, $lesson]) }}"
                    >
                        {{ $lesson->name }}
                    </a>
                </div>
                <div class="d-flex ms-2 gap-2">
                    <a
                        href="{{ route("courses.modules.lessons.edit", [$course, $module, $lesson]) }}"
                        class="btn btn-sm btn-outline-primary"
                    >
                        Editar Aula
                    </a>

                    <form
                        action="{{ route("courses.modules.lessons.destroy", [$course, $module, $lesson]) }}"
                        method="POST"
                        onsubmit="return confirm('Deseja realmente excluir esta aula?')"
                    >
                        @csrf
                        @method("DELETE")
                        <button
                            type="submit"
                            class="btn btn-sm btn-outline-danger"
                        >
                            Excluir Aula
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endif
