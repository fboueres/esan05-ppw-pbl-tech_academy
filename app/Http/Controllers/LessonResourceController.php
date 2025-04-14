<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lessons\StoreLessonRequest;
use App\Http\Requests\Lessons\UpdateLessonRequest;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Module;

class LessonResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course, Module $module)
    {
        return redirect()
            ->route('courses.modules.index', $course);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course, Module $module)
    {
        return view('lessons.create', compact('course', 'module'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLessonRequest $request, Course $course, Module $module)
    {
        $module->lessons()->create($request->validated());

        return redirect()
            ->route('courses.modules.index', $course)
            ->with('success', 'Aula criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course, Module $module, Lesson $lesson)
    {
        return view('lessons.show', compact('course', 'module', 'lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course, Module $module, Lesson $lesson)
    {
        return view('lessons.edit', compact('course', 'module', 'lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLessonRequest $request, Course $course, Module $module, Lesson $lesson)
    {
        $lesson->update($request->validated());

        return redirect()
            ->route('courses.modules.index', [$course, $module, $lesson])
            ->with('success', 'Aula atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course, Module $module, Lesson $lesson)
    {
        $lesson->delete();

        return redirect()
            ->route('courses.modules.index', $course)
            ->with('success', 'Aula excluída com sucesso!');
    }
}
