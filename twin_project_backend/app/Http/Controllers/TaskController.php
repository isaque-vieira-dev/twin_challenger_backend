<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TaskResource::collection(Task::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:40'],
            'desc' => ['required', 'string', 'max:120'],
            'status' => ['required', 'string', 'max:20'],
        ]);

        $task = Task::create($request->only(['title', 'desc', 'status']));

        return new TaskResource($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:40'],
            'desc' => ['required', 'string', 'max:120'],
            'status' => ['required', 'string', 'max:20'],
        ]);

        $task->update($request->only(['title', 'desc', 'status']));

        return new TaskResource($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->noContent();
    }
}
