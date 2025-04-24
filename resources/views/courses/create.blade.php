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
                    <x-form.input-text
                        name="name"
                        label="Nome do Curso"
                        required
                    />
                    <x-form.input-textarea
                        name="description"
                        label="Descrição do Curso"
                    />
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
