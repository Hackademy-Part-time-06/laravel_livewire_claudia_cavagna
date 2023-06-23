<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function homepage(){
        return view('homepage');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('tasks.create', compact('categories'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Task $task)
    {
        $task->delete(); 
        session()->flash('task', 'Task eliminato correttamente');
    }
}
