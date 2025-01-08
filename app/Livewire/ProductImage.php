<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Component
{
    use WithFileUploads;

    public Product $product;
    public $image;
    public $imagePreview;

    protected $rules = [
        'image' => 'required|image|max:5000',
    ];

    // Preview selected image before upload
    public function updatedImage()
    {
        if ($this->image) {
            $this->imagePreview = $this->image->temporaryUrl();
        } else {
            $this->imagePreview = null;
        }
    }

    // Save the uploaded image
    public function saveImage()
    {
        $this->validate(); // Validate input

        // Delete old image if exists
        if ($this->product->image) {
            Storage::disk('public')->delete($this->product->image);
        }

        $path = $this->image->store('products', 'public');

        $this->product->update(['image' => $path]);

        $this->imagePreview = null;
        $this->deleteTempFiles();
        return $this->redirect(route('admin.products.index'), navigate: true);

    }

    // Delete the existing image
    public function deleteImage()
    {
        // Delete image file from storage
        if ($this->product->image) {
            Storage::disk('public')->delete($this->product->image);
            $this->product->update(['image' => null]);
        }

        $this->imagePreview = null;
        $this->deleteTempFiles();

    }

    // Clear temporary files
    private function deleteTempFiles()
    {
        $tempPath = storage_path('app/private/livewire-tmp'); 
        foreach (glob($tempPath . '/*') as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
    }

    public function render()
    {
        return view('livewire.product-image');
    }
}
