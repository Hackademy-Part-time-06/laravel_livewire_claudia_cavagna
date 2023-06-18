<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;


class TasksCreateForm extends Component
{

    public $title, $description;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);
        $this->reset('title', 'description');
        session()->flash('task', 'Task creato!');
    }

    public function render()
    {
        return view('livewire.tasks-create-form');
    }
}
