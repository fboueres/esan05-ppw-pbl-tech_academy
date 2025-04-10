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
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($modules as $module)
                        <tr>
                            <th scope="row">{{ $module->name }}</th>
                            <td>
                                <form action="{{ route('lessons.modules.destroy', [$lesson, $module]) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar Módulo</button>
                                </form>
                                <a href="{{ route('lessons.modules.edit', [$lesson, $module]) }}" class="btn btn-primary">Editar Módulo</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>Sem Módulos cadastrados.</th>
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