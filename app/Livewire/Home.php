<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Livewire\Component;

class Home extends Component
{
    public $setting;
    public $s_products = [];
    public $search = '';

    public function mount()
    {
        $this->setting = Setting::first();
    }

    public function updatedSearch()
    {
$this->s_products = Product::where("name", "LIKE", "%{$this->search}%")->orderBy('name')->get();    }

    public function render()
    {
        $categories = Category::where("enabled", true)
            ->with([
                'products' => function ($query) {
                    $query->where("enabled", true)->orderBy('position'); // Order products by position
                }
            ])
            ->orderBy('position')
            ->has('products')
            ->get();

        return view('livewire.home', compact("categories"));
    }
}
