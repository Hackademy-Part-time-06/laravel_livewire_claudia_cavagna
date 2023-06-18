<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TasksTable extends Component
{
    public function render()
    {
        $tasks = Task::all();
        return view('livewire.tasks-table', compact('tasks'));
    }
}
