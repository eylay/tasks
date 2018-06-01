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

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string|between:4,100|unique:tasks,name",
            "date" =>  "nullable|date",
        ]);
        Task::create($data);
        HelperController::flash();
        return back();
    }
}
