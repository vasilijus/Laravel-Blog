<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    public function index()
    {
		$tasks = Task::all();

	    return view('tasks.index',compact('tasks'));
	}
	public function show(Task $task) // Task::find(wildcard)
    {
		//dd($tasks); 
		//return $task;
	    return view('tasks.show', compact('task'));
	}
}
