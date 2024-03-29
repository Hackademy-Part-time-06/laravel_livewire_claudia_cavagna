<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;



class TaskEditForm extends Component
{
    public $title, $description;
    public Task $task;
    
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
    ];

    public function mount(){
        $this->title = $this->task->title;
        $this->description = $this->task->description;
    }

    public function update(){
        $this->validate();

        $this->task->update([
            'title' => $this->title,
            'description' => $this->description,
        ]);
        session()->flash('task', 'Modifiche effettuate!');
    }

    public function render()
    {

        return view('livewire.task-edit-form');
    }
}
