@extends("app")
@section("title", "Criar Novo Módulo")
@section("content")
    <section class="p-5 d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">
                    Cadastrar Novo Módulo
                </h3>
                <form action="{{ route("lessons.modules.store", $lesson) }}" method="post">
                    @csrf
                    @method("POST")
                    <div class="form-group mb-3">
                        <div class="form-group mb-3">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control @error("name") is-invalid @enderror"
                                placeholder="Nome do Módulo"
                                value="{{ old("name") }}"
                            />
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="form-group mb-3">
                            <input
                                type="text"
                                name="description"
                                id="description"
                                class="form-control @error("description") is-invalid @enderror"
                                placeholder="Descrição do Módulo"
                                value="{{ old("description") }}"
                            />
                        </div>
                    </div>
                    <div class="w-full d-flex justify-content-end gap-1">
                        <a
                            href="{{ route("lessons.modules.index", $lesson) }}"
                            class="btn btn-secondary"
                        >
                            Voltar
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
