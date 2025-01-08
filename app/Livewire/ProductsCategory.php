<?php
namespace App\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;

class ProductsCategory extends Component
{
    public Category $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function updateEnabled($id)
    {
        $product = Product::find($id);
        $product->enabled = !$product->enabled;
        $product->save();
    }
    public function updateNew($id)
    {
        $product = Product::find($id);
        $product->new = !$product->new;
        $product->save();
    }
    public function updateSpicy($id)
    {
        $product = Product::find($id);
        $product->spicy = !$product->spicy;
        $product->save();
    }
    public function updateVeg($id)
    {
        $product = Product::find($id);
        $product->vegetarian = !$product->vegetarian;
        $product->save();
    }
    public function updateBestSeller($id)
    {
        $product = Product::find($id);
        $product->top_seller = !$product->top_seller;
        $product->save();
    }
    public function deleteNewPrice($id)
    {
        $product = Product::find($id);
        $product->new_price = NULL;
        $product->save();
    }

    public function updateProductOrder($orderedProducts)
    {
        foreach ($orderedProducts as $index => $product) {
            Product::where('id', $product['value'])->update(['position' => $index + 1]);
        }

        $this->category->refresh();
    }

    public function render()
    {
        $products = $this->category->products()->orderBy('position')->get();
        return view('livewire.products-category', compact("products"));
    }
}

