<div>
    <x-btn.back />

    <div class="p-4 bg-base-100 rounded-lg shadow-md">
        <!-- Form Header -->
        <h2 class="text-lg font-bold mb-4">Create Category</h2>

        <!-- Form -->
        <form wire:submit.prevent="createCategory" class="space-y-4">
            <!-- Category Name Input -->
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Category Name</span>
                </label>
                <input type="text" wire:model="name" placeholder="Enter category name"
                    class="input input-bordered w-full" />
                @error('name')
                    <span class="text-error text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="form-control mt-4">
                <button type="submit" class="btn btn-primary w-full">
                    Create Category
                </button>
            </div>
        </form>
    </div>

</div>
