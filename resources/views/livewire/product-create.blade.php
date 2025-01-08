<div class="p-6  rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Create Product</h2>

    @if ($errors->any())
    <div class="alert alert-danger mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label class="label">Name</label>
            <input type="text" wire:model="name" class="input input-bordered w-full" />
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="label">Description</label>
            <textarea wire:model="description" class="textarea textarea-bordered w-full"></textarea>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="label">Price</label>
                <input type="number" step="0.01" wire:model="price" class="input input-bordered w-full" />
            </div>
            <div>
                <label class="label">New Price</label>
                <input type="number" step="0.01" wire:model="new_price" class="input input-bordered w-full" />
            </div>
            <div>
                <label class="label">Small</label>
                <input type="number" step="0.01" wire:model="small" class="input input-bordered w-full" />
            </div>
            <div>
                <label class="label">Large</label>
                <input type="number" step="0.01" wire:model="large" class="input input-bordered w-full" />
            </div>
        </div>

        <div class="mb-4">
            <label class="label">Preparation Time (minutes)</label>
            <input type="number" wire:model="preparation_time" class="input input-bordered w-full" />
        </div>

        <div class="mb-4">
            <label class="label">Category</label>
            <select wire:model="category_id" class="select select-bordered w-full">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>



        <div class="mb-4">
            <label class="label">Design</label>
            <select wire:model="design" class="select select-bordered w-full">
                <option value="1">Design 1</option>
                <option value="2">Design 2</option>
            </select>
        </div>



        <button type="submit" class="btn btn-primary w-full">Create Product</button>
    </form>
</div>
