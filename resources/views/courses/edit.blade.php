@extends("layouts.app")
@section("title", "Editar Curso")
@section("content")
    <section class="d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">Editar Curso</h3>
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

                <form
                    action="{{ route("courses.update", $course) }}"
                    method="POST"
                >
                    @csrf
                    @method("PUT")
                    <x-form.input-text
                        name="name"
                        label="Nome do Curso"
                        :value="$course->name"
                        required
                    />

                    <x-form.input-text
                        name="description"
                        label="Descrição do Curso"
                        :value="$course->description"
                        required
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
