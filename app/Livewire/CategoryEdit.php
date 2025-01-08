<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryEdit extends Component
{
    public Category $category;
    public $name;

    protected $rules = [
        'name' => 'required|string|min:1|max:25',
    ];


    public function save()
    {
        $this->validate();
        $this->category->update([
            'name' => $this->name,
        ]);
        return $this->redirect(route('admin.categories.index'), navigate: true);
    }


    public function delete()
    {
        if ($this->category->products()->exists()) {
            return $this->back();
        }
        $this->category->delete();
        return $this->redirect(route('admin.categories.index'), navigate: true);
    }


    public function mount()
    {
        $this->name = $this->category->name;

    }

    public function render()
    {
        return view('livewire.category-edit');
    }
}
