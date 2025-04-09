@extends('app')
@section('title', 'Módulos')
@section('content')
<section class="d-flex justify-content-center p-3">
    <div class="card w-50">
        <div class="card-body">
            <a href="{{ route('lessons.modules.create', $lesson) }}" class="btn btn-primary">Criar Novo Módulo</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Duração</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($lessons as $lesson)
                        <tr>
                            <th scope="row">{{ $lesson->name }}</th>
                            <td>{{ $lesson->duration }}</td>
                            <td>
                                <form action="{{ route('lessons.destroy', $lesson) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar Curso</button>
                                </form>
                                <a href="{{ route('lessons.edit', $lesson) }}" class="btn btn-primary">Editar Curso</a>
                                <a href="{{ route('lessons.modules.index', $lesson) }}" class="btn btn-secondary">Módulos</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>Sem cursos cadastrados.</th>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection