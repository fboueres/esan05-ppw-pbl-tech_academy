<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModuleRequest;
use App\Http\Requests\UpdateModuleRequest;
use App\Models\Lesson;
use App\Models\Module;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Lesson $lesson)
    {
        $modules = $lesson->modules;

        return view('modules.index', compact('lesson', 'modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Lesson $lesson)
    {
        return view('modules.create', compact('lesson'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModuleRequest $request, Lesson $lesson)
    {
        $lesson->modules()->create($request->validated());

        return redirect()->route('lessons.modules.index', $lesson);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson, Module $module)
    {
        return redirect()->route('lessons.modules.index', $lesson);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson, Module $module)
    {
        return view('modules.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModuleRequest $request, Lesson $lesson, Module $module)
    {
        $module->update($request->validated());

        return redirect()->route('lessons.modules.index', $lesson);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson, Module $module)
    {
        $module->delete();

        return redirect()->route('lessons.modules.index', $lesson);
    }
}
