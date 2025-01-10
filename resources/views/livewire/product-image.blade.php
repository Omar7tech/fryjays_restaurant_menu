<div>

    <div class="flex justify-center">
        <div>
            Editing Image For : {{ $product->name }}
        </div>
    </div>

    <!-- Show Image and Delete Button if an Image Exists -->
    @if ($product->image)
        <div class="mb-4 flex justify-center flex-col">
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-50 h-50 object-cover mb-4">

            <!-- Delete Button -->
            <button wire:click="deleteImage" class="btn btn-error">
                Delete Image
            </button>
        </div>
    @else
        <!-- Show Upload Form When No Image Exists -->
        <form wire:submit.prevent="saveImage" enctype="multipart/form-data" class="p-4">
            <!-- Image Preview -->
            <div class="mb-4">
                @if ($imagePreview)
                    <p class="font-semibold mb-2">Selected Image:</p>
                    <img src="{{ $imagePreview }}" alt="Preview Image" class="w-40 h-40 object-cover border mb-4">
                @endif
            </div>

            <!-- File Input -->
            <div>
                <label for="image" class="block text-sm font-semibold mb-2">Choose Image</label>
                <input wire:model="image" type="file" class="file-input file-input-bordered file-input-md w-full" />

                <!-- Loading Spinner -->
                <div wire:loading wire:target="image" class="text-sm text-gray-500 mt-2">
                    Uploading...
                </div>

                <!-- Validation Error -->
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    @endif

    <div class="mt-6 text-center">
        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Back to Products</a>
    </div>
</div>
