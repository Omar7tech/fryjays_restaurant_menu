<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Edit Settings</h2>

    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="alert alert-success mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="saveSettings" class="space-y-8">
        <!-- General Settings -->
        <div class="border p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4 flex items-center">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                General Settings
            </h3>

            <div class="form-control my-5">
                <label class="label">Title Text</label>
                <input type="text" class="input input-bordered" wire:model="hero_text">
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Logo</span>
                    <input type="checkbox" class="toggle" wire:model="show_logo">
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Sizes</span>
                    <input type="checkbox" class="toggle" wire:model="show_sizes">
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Spicy And Vegan</span>
                    <input type="checkbox" class="toggle" wire:model="show_spicy_vegan">
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Images</span>
                    <input type="checkbox" class="toggle" wire:model="show_images">
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Socials</span>
                    <input type="checkbox" class="toggle" wire:model="show_socials">
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Preparation Time</span>
                    <input type="checkbox" class="toggle" wire:model="show_preparation_time">
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Sales</span>
                    <input type="checkbox" class="toggle" wire:model="show_sale">
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Search</span>
                    <input type="checkbox" class="toggle" wire:model="show_search">
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Description</span>
                    <input type="checkbox" class="toggle" wire:model="show_description">
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Category Colored Title</span>
                    <input type="checkbox" class="toggle" wire:model="category_colored_title">
                </label>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="border p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4 flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>

                <span>
                    Social Media Links
                </span>
            </h3>
            <div class="form-control mb-2">
                <label class="label">Facebook</label>
                <input type="text" class="input input-bordered" wire:model="facebook">
            </div>
            <div class="form-control mb-2">
                <label class="label">Instagram</label>
                <input type="text" class="input input-bordered" wire:model="instagram">
            </div>
            <div class="form-control mb-2">
                <label class="label">Phone</label>
                <input type="text" class="input input-bordered" wire:model="phone">
            </div>
            <div class="form-control mb-2">
                <label class="label">Whatsapp</label>
                <input type="text" class="input input-bordered" wire:model="whatsapp">
            </div>
        </div>

        <!-- Currency Settings -->
        <div class="border p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4 flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                </svg>
                <span>
                    Currency Settings
                </span>
            </h3>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Lebanese Currency</span>
                    <input type="checkbox" class="toggle" wire:model="show_lebanese_currency">
                </label>
            </div>
            <div class="form-control">
                <label class="label">Lebanese Currency</label>
                <input required type="number" class="input input-bordered" wire:model="lebanese_currency">
            </div>
            @error('lebanese_currency')
                <div role="alert" class="alert alert-error mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ $message }}</span>
                </div>
            @enderror

        </div>

        <!-- Location -->
        <div class="border p-4 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-4 flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>

                <span>
                    Location
                </span>
            </h3>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Show Location</span>
                    <input type="checkbox" class="toggle" wire:model="show_location">
                </label>
            </div>
            <div class="form-control mb-2">
                <label class="label">Location</label>
                <input type="text" class="input input-bordered" wire:model="location">
            </div>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="btn btn-primary w-full">Save Settings</button>
        </div>
        @if (session()->has('message'))
        <div class="alert alert-success mb-4">
            {{ session('message') }}
        </div>
    @endif
    </form>
</div>
