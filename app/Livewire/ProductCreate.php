<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ProductCreate extends Component
{


    public $name;
    public $description;
    public $price;
    public $small;
    public $large;
    public $new_price;
    public $preparation_time;
    public $category_id;
    public $design = 1;

    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'price' => 'nullable|numeric',
            'small' => 'nullable|numeric',
            'large' => 'nullable|numeric',
            'new_price' => 'nullable|numeric',
            'preparation_time' => 'nullable|integer',
            'category_id' => 'nullable|exists:categories,id',
            'design' => 'required|in:1,2',
        ]);

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'small' => $this->small,
            'large' => $this->large,
            'new_price' => $this->new_price,
            'preparation_time' => $this->preparation_time,
            'category_id' => $this->category_id,
            'design' => $this->design,
            'position' => (Product::max("position") +1 )
        ]);

        return $this->redirect(route('admin.products.index') , navigate:true);
    }

    public function render()
    {

        return view('livewire.product-create');
    }
}

