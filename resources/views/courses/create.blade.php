@extends("layouts.app")
@section("title", "Criar Novo Curso")
@section("content")
    <section class="d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">Criar Novo Curso</h3>
                <form action="{{ route("courses.store") }}" method="POST">
                    @csrf
                    @method("POST")
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control @error("name") is-invalid @enderror"
                            placeholder="Nome do Curso"
                            value="{{ old("name") }}"
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
{{ old("description") }}</textarea
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
                            Cadastrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
