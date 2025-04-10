@extends("app")
@section("title", "Editar Módulo")
@section("content")
    <section class="p-5 d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">
                    Editar Módulo
                </h3>
                <form action="{{ route("lessons.modules.update", [$lesson, $module]) }}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="form-group mb-3">
                        <div class="form-group mb-3">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control @error("name") is-invalid @enderror"
                                placeholder="Nome do Módulo"
                                value="{{ old("name", $module->name) }}"
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
                                value="{{ old("description", $module->description) }}"
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
