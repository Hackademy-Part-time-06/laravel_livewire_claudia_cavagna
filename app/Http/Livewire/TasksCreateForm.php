<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use App\Models\Category;


class TasksCreateForm extends Component
{

    public $title, $description, $category_id;
    public $categories;

    public function mount(){
        $this->categories = Category::all();
    }

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
            'category_id' => $this->category_id,
        ]);
        $this->reset('title', 'description', 'category_id');
        session()->flash('task', 'Task creato!');
    }

    public function render()
    {
        return view('livewire.tasks-create-form');
    }
}
