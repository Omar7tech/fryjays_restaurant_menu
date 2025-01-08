<div class="p-4 bg-base-100 rounded-lg shadow-md">
    <x-btn.back />
    <!-- Form Header -->
    <h2 class="text-lg font-bold mb-4">Edit Category</h2>


    <!-- Edit Form -->
    <form wire:submit.prevent="save" class="space-y-4">
        <!-- Category Name -->
        <div class="form-control">
            <label class="label">
                <span class="label-text">Category Name</span>
            </label>
            <input type="text" wire:model="name" class="input input-bordered w-full" />
            @error('name')
                <span class="text-error text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Save Button -->
        <div class="form-control mt-4">
            <button type="submit" class="btn btn-primary w-full">
                Save Changes
            </button>
        </div>
    </form>

    <!-- Divider -->
    <div class="divider"></div>

    <!-- Delete Button -->
    @if ($category->products()->count() == 0)
        <div class="mt-4">
            <button type="button" class="btn btn-error w-full"
                onclick="confirm('Are you sure you want to delete this category?') || event.stopImmediatePropagation()"
                wire:click="delete">
                Delete Category
            </button>
        </div>
    @else
        <p class="text-error text-sm">To delete this category, you must first delete all related products.</p>
    @endif


</div>
