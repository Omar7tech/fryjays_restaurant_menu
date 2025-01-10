<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{

    use WithPagination;
    public $search = '';
    public function render()
    {
        $products = Product::where("name" , "LIKE" , "%{$this->search}%")->with("category")->latest()->paginate(10);
        return view('livewire.products', [
            'products' => $products,
        ]);
    }
}
