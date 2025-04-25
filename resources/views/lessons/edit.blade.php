@extends("layouts.app")

@section("title", "Editar Aula")

@section("content")
    <section class="d-flex justify-content-center">
        <div class="card w-50 shadow-sm">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Editar Aula</h3>

                <form
                    action="{{ route("courses.modules.lessons.update", [$course, $module, $lesson]) }}"
                    method="POST"
                >
                    @csrf
                    @method("PUT")

                    <x-form.input-text
                        name="name"
                        label="Nome da Aula"
                        :value="$lesson->name"
                    />

                    <x-form.input-text
                        name="link"
                        label="Link da Aula"
                        :value="$lesson->link"
                    />

                    <x-form.input-text
                        type="number"
                        name="order"
                        label="Ordem no Módulo"
                        :value="$lesson->order"
                    />

                    <div class="d-flex gap-3">
                        <a
                            href="{{ url()->previous() }}"
                            class="btn btn-secondary w-100"
                        >
                            Voltar
                        </a>
                        <button type="submit" class="btn btn-primary w-100">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
