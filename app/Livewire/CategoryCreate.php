<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryCreate extends Component
{

    public $name;

    protected $rules = [
        'name' => 'required|string|min:1|max:25',
    ];


    public function createCategory()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
            'enabled' => false,
            'position' => Category::max('position') + 1,
        ]);


        return $this->redirect(route("admin.categories.index"), navigate: true);

    }

    public function render()
    {
        return view('livewire.category-create');
    }
}
