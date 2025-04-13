@extends("layouts.app")
@section("title", "Editar Curso")
@section("content")
    <section class="d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">Editar Curso</h3>
                <form
                    action="{{ route("courses.update", $course) }}"
                    method="POST"
                >
                    @csrf
                    @method("PUT")
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control @error("name") is-invalid @enderror"
                            placeholder="Nome do Curso"
                            value="{{ old("name", $course->name) }}"
                            required
                        />
                        <label for="name">Nome do Curso</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea
                            name="description"
                            id="description"
                            class="form-control @error("description") is-invalid @enderror"
                            placeholder="Descrição do Curso"
                            required
                        >
{{ old("description", $course->description) }}</textarea
                        >
                        <label for="description">Descrição do Curso</label>
                    </div>

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
        @if (session("success"))
            <div
                class="toast-container position-fixed top-0 end-0 p-3"
                style="z-index: 1100"
            >
                <div
                    class="toast align-items-center text-bg-success border-0 show"
                    role="alert"
                    aria-live="assertive"
                    aria-atomic="true"
                >
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ session("success") }}
                        </div>
                        <button
                            type="button"
                            class="btn-close btn-close-white me-2 m-auto"
                            data-bs-dismiss="toast"
                            aria-label="Fechar"
                        ></button>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
