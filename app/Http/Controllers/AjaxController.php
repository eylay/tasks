<?php

namespace App\Http\Controllers;

class AjaxController extends Controller
{
    public function main($method)
    {
        if (method_exists($this,$method)) {
            $this->$method();
        }else {
            abort(404);
        }
    }

    public function mark_tasks()
    {
        $task = \App\Task::find(request('task_id'));
        $task->done = !$task->done;
        $task->save();
    }
}
