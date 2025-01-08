<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{

    public function render()
    {
        $categories = Category::orderBy('position')->get();
        return view('livewire.categories', compact("categories"));
    }

    public function updateCategoryOrder($categories)
    {
        foreach ($categories as $category) {
            $categoryId = $category['value'];
            $newPosition = $category['order'];
            Category::where('id', $categoryId)->update(['position' => $newPosition]);
        }
    }

    public function updateEnabled($id)
    {
        $category = Category::find($id);
        $category->enabled = !$category->enabled;
        $category->save();
    }
}
