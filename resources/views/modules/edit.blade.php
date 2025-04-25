@extends("layouts.app")

@section("title", "Criar Novo Módulo")

@section("content")
    <section class="d-flex justify-content-center">
        <div class="card w-50 shadow-sm">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Criar Novo Módulo</h3>

                <form
                    action="{{ route("courses.modules.update", [$course, $module]) }}"
                    method="POST"
                >
                    @csrf
                    @method("PUT")

                    <x-form.input-text
                        name="name"
                        label="Nome do Módulo"
                        :value="$module->name"
                    />

                    <x-form.input-text
                        name="order"
                        label="Ordem no Curso"
                        :value="$module->order"
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
