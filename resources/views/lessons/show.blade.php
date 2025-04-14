@extends("layouts.app")

@section("title", "Aula: " . $lesson->name)

@section("content")
    <div class="row">
        <div class="col-md-8 mb-4">
            <h3>{{ $lesson->name }}</h3>

            @if ($lesson->link)
                <div class="ratio ratio-16x9 mb-4">
                    <iframe
                        src="{{ Str::replace("watch?v=", "embed/", $lesson->link) }}"
                        frameborder="0"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                    ></iframe>
                </div>
            @else
                <div class="alert alert-warning">
                    Nenhum link de vídeo disponível para esta aula.
                </div>
            @endif

            <p class="text-muted">Ordem: #{{ $lesson->order }}</p>
        </div>

        <div class="col-md-4">
            <h5 class="mb-3">
                Módulos do curso
                <strong>{{ $course->name }}</strong>
            </h5>
            <div class="list-group">
                @foreach ($course->modules->sortBy("order") as $mod)
                    <div class="list-group-item">
                        <strong>
                            {{ $mod->order }}º Módulo - {{ $mod->name }}
                        </strong>
                        <ul class="list-group list-group-flush mt-2">
                            @foreach ($mod->lessons->sortBy("order") as $modLesson)
                                <li
                                    class="list-group-item px-2 py-1 @if($modLesson->id === $lesson->id) active @endif"
                                >
                                    <a
                                        href="{{ route("courses.modules.lessons.show", [$course, $mod, $modLesson]) }}"
                                        class="@if($modLesson->id === $lesson->id) text-white @else text-decoration-none @endif"
                                    >
                                        #{{ $modLesson->order }} -
                                        {{ $modLesson->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
