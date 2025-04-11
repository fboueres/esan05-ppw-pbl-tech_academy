@extends("app-base")
@section("title", "Criar Novo Curso")
@section("content")
    <section class="d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">Criar Novo Curso</h3>
                <form action="{{ route("courses.store") }}" method="POST">
                    @csrf
                    @method("POST")
                    <div class="form-group mb-3">
                        <div class="form-group mb-3">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control @error("name") is-invalid @enderror"
                                placeholder="Nome do Curso"
                                value="{{ old("name") }}"
                            />
                        </div>
                        <div class="d-flex gap-3">
                            <a
                                href="{{ route("courses.index") }}"
                                class="btn btn-secondary w-100"
                            >
                                Voltar aos Cursos
                            </a>
                            <button type="submit" class="btn btn-primary w-100">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
