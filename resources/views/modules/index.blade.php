@extends('layouts.app')

@section('title', 'Módulos - ' . $course->name)

@section('content')
    <section>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0">Módulos de {{ $course->name }}</h3>
            <a href="{{ route('courses.modules.create', $course) }}" class="btn btn-success">
                + Novo Módulo
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
        @endif

        @if ($modules->isEmpty())
            <div class="alert alert-info">Nenhum módulo cadastrado para este curso ainda.</div>
        @else
            <div class="list-group">
                @foreach ($modules->sortBy('order') as $module)
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="mb-1">
                                    <span class="badge bg-primary me-2">#{{ $module->order }}</span>
                                    {{ $module->name }}
                                </h5>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Ações
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('courses.modules.edit', [$course, $module]) }}">Editar</a>
                                    </li>
                                    <li>
                                        <form action="{{ route('courses.modules.destroy', [$course, $module]) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir este módulo?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item text-danger">Excluir</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
