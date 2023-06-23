<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryCreateForm extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();

        Category::create([
            'name' => $this->name,
        ]);
        $this->reset('name');
        session()->flash('category', 'Categoria creata!');
    }


    public function render()
    {
        return view('livewire.category-create-form');
    }
}
