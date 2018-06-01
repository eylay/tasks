<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::paginate(10);
        return view('tasks.index',compact('tasks'));
    }

    public function show(Task $task)
    {
        return view('tasks.show',compact('task'));
    }

    public function create()
    {
        $task = new Task;
        return view('tasks.form',compact('task'));
    }

    public function store()
    {
        $data = ValidationController::task();
        Task::create($data);
        HelperController::flash();
        return redirect("tasks");
    }

    public function edit(Task $task)
    {
        return view('tasks.form',compact('task'));
    }

    public function update(Task $task)
    {
        $data = ValidationController::task($task->id);
        $task->update($data);
        HelperController::message("آیتم مورد نظر ویرایش شد.");
        return back();
    }

    public function destroy(Task $task)
    {
        $task->delete();
        HelperController::flash_delete_message();
        return redirect("tasks");
    }
}
