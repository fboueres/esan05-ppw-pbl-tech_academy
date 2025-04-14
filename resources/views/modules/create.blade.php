@extends('layouts.app')

@section('title', 'Criar Novo Módulo')

@section('content')
    <section class="d-flex justify-content-center">
        <div class="card w-50 shadow-sm">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Criar Novo Módulo</h3>

                <form action="{{ route('courses.modules.store', $course) }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Nome do Módulo"
                            value="{{ old('name') }}"
                            required
                        />
                        <label for="name">Nome do Módulo</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input
                            type="number"
                            name="order"
                            id="order"
                            class="form-control @error('order') is-invalid @enderror"
                            placeholder="Ordem no Curso"
                            value="{{ old('order') }}"
                            min="1"
                            required
                        />
                        <label for="order">Ordem no Curso</label>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary w-100">
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
