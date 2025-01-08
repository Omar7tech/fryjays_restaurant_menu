<?php
namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ProductEdit extends Component
{
    public Product $product;
    public $name;
    public $description;
    public $price;
    public $small;
    public $large;
    public $new_price;
    public $preparation_time;
    public $category_id;
    public $design;

    public function mount()
    {
        $this->name = $this->product->name;
        $this->description = $this->product->description;
        $this->price = $this->product->price;
        $this->small = $this->product->small;
        $this->large = $this->product->large;
        $this->new_price = $this->product->new_price;
        $this->preparation_time = $this->product->preparation_time;
        $this->category_id = $this->product->category_id;
        $this->design = $this->product->design;
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


        $this->name = $this->name ?: null;
        $this->description = $this->description ?: null;
        $this->price = $this->price === '' ? null : $this->price;
        $this->small = $this->small === '' ? null : $this->small;
        $this->large = $this->large === '' ? null : $this->large;
        $this->new_price = $this->new_price === '' ? null : $this->new_price;
        $this->preparation_time = $this->preparation_time === '' ? null : $this->preparation_time;
        $this->category_id = $this->category_id ?: null;

        $this->product->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'small' => $this->small,
            'large' => $this->large,
            'new_price' => $this->new_price,
            'preparation_time' => $this->preparation_time,
            'category_id' => $this->category_id,
            'design' => $this->design,
        ]);

        return $this->redirect(route('admin.products.index'), navigate: true);

    }

    public function delete()
    {

        if ($this->product->image) {
            Storage::disk('public')->delete($this->product->image);
        }

        $this->product->delete();
        return $this->redirect(route('admin.products.index'), navigate: true);

    }



    public function render()
    {
        $categories = Category::all();
        return view('livewire.product-edit', compact('categories'));
    }
}
