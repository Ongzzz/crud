<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all()->toArray();
        return view('index', compact('tasks'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('edit', compact('task'));
    }

    public function create()
    {
        return view('create');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('show', compact('task'));
    }

    public function saveNewTask(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'due_date' => 'required'
        ]);

        $task = new Task;

        $task->title = $request->title;
        $task->description = $request->description;
        $task->due_date = $request->due_date;

        if($task->save())
        {
            return redirect('/')->with('success', 'Task Added');
        }
        else
        {
            return redirect('/')->with('failed', 'Failed to add new task');
        }
    }

    public function updateTask(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'due_date' => 'required'
        ]);

        $task = Task::find($id);

        $task->title = $request->title;
        $task->description = $request->description;
        $task->due_date = $request->due_date;

        if($task->update())
        {
            return redirect('/')->with('success', 'Task Updated');
        }
        else
        {
            return redirect('/')->with('failed', 'Failed to update the task');
        }
    }

    public function deleteTask($id)
    {

        $task = Task::find($id);

        if($task->delete())
        {
            return redirect('/')->with('success', 'Task Deleted');
        }
        else
        {
            return redirect('/')->with('failed', 'Failed to delete the task');
        }
    }

    
}
