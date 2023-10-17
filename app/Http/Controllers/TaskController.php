<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allData = Task::all();
        return view('admin.all-task', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-task');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('task.index')->with('message', 'Data Insert Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {

        return view('admin.edit-task', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('task.index')->with('message', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('delete-msg', 'Data Deleted Successfully');
    }
}
