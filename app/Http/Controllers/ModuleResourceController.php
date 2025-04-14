<?php

namespace App\Http\Controllers;

use App\Http\Requests\Modules\StoreModuleRequest;
use App\Http\Requests\Modules\UpdateModuleRequest;
use App\Models\Course;
use App\Models\Module;

class ModuleResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course)
    {
        $modules = $course->modules()->with('lessons')->get();

        return view('modules.index', compact('course', 'modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('modules.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModuleRequest $request, Course $course)
    {
        $course->modules()->create($request->validated());

        return redirect()->route('courses.modules.index', $course)->with('success', 'Módulo criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course, Module $module)
    {
        return redirect()->route('courses.modules.index', $course);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course, Module $module)
    {
        return view('modules.edit', compact('course', 'module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModuleRequest $request, Course $course, Module $module)
    {
        $module->update($request->validated());

        return redirect()->route('courses.modules.index', $course)->with('success', 'Módulo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course, Module $module)
    {
        $module->delete();

        return redirect()->route('courses.modules.index', $course);
    }
}
