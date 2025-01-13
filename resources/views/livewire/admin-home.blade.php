<div class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Categories Section -->
    <a wire:navigate href="{{ route('admin.categories.index') }}"
        class="p-6 flex flex-col items-center justify-center text-center bg-base-200 shadow-xl rounded-lg hover:scale-105 hover:bg-accent hover:text-accent-content transition-all">
        <div class="flex items-center space-x-4">
            <!-- Icon for View Categories -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
            </svg>
            <!-- Text for View Categories -->
            <div>
                <div class="text-2xl font-bold">View Categories</div>
                <p class="text-lg">Browse all categories</p>
            </div>
        </div>
    </a>

    <!-- Create Category Section -->
    <a wire:navigate href="{{ route('admin.categories.create') }}"
        class="p-6 flex flex-col items-center justify-center text-center bg-base-200 shadow-xl rounded-lg hover:scale-105 hover:bg-secondary hover:text-secondary-content transition-all">
        <div class="flex items-center space-x-4">
            <!-- Icon for Create Category -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
            </svg>

            <!-- Text for Create Category -->
            <div>
                <div class="text-2xl font-bold">Create Category</div>
                <p class="text-lg">Create a new category</p>
            </div>
        </div>
    </a>

    <!-- Products Section -->
    <a wire:navigate href="{{ route('admin.products.index') }}"
        class="p-6 flex flex-col items-center justify-center text-center bg-base-200 shadow-xl rounded-lg hover:scale-105 hover:bg-success hover:text-success-content transition-all">
        <div class="flex items-center space-x-4">
            <!-- Icon for View Products -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
            </svg>

            <!-- Text for View Products -->
            <div>
                <div class="text-2xl font-bold">View Products</div>
                <p class="text-lg">Browse all products</p>
            </div>
        </div>
    </a>

    <!-- Create Product Section -->
    <a wire:navigate href="{{ route('admin.products.create') }}"
        class="p-6 flex flex-col items-center justify-center text-center bg-base-200 shadow-xl rounded-lg hover:scale-105 hover:bg-info hover:text-info-content transition-all">
        <div class="flex items-center space-x-4">
            <!-- Icon for Create Product -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

            <!-- Text for Create Product -->
            <div>
                <div class="text-2xl font-bold">Create Product</div>
                <p class="text-lg">Add a new product</p>
            </div>
        </div>
    </a>



    <a wire:navigate href="{{ route('admin.settings') }}"
        class="p-6 flex flex-col items-center justify-center text-center bg-base-200 shadow-xl rounded-lg hover:scale-105 hover:bg-info hover:text-info-content transition-all">
        <div class="flex items-center space-x-4">
            <!-- Icon for Create Product -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.5 12a7.5 7.5 0 0 0 15 0m-15 0a7.5 7.5 0 1 1 15 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077 1.41-.513m14.095-5.13 1.41-.513M5.106 17.785l1.15-.964m11.49-9.642 1.149-.964M7.501 19.795l.75-1.3m7.5-12.99.75-1.3m-6.063 16.658.26-1.477m2.605-14.772.26-1.477m0 17.726-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205 12 12m6.894 5.785-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
            </svg>

            <div>
                <div class="text-2xl font-bold">Settings</div>
            </div>
        </div>
    </a>

    <a wire:navigate href="{{ route('home') }}"
        class="p-6 flex flex-col items-center justify-center text-center bg-base-200 shadow-xl rounded-lg hover:scale-105 hover:bg-info hover:text-info-content transition-all">
        <div class="flex items-center space-x-4">
            <!-- Icon for Create Product -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>


            <div>
                <div class="text-2xl font-bold">View Website</div>
            </div>
        </div>
    </a>

    <a wire:navigate href="{{ route('admin.account') }}"
        class="p-6 flex flex-col items-center justify-center text-center bg-base-200 shadow-xl rounded-lg hover:scale-105 hover:bg-info hover:text-info-content transition-all">
        <div class="flex items-center space-x-4">
            <!-- Icon for Create Product -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>

            <div>
                <div class="text-2xl font-bold">Manage Account</div>
            </div>
        </div>
    </a>

    <a href="{{ route('admin.logout') }}"
        class="p-6 flex flex-col items-center justify-center text-center bg-error shadow-xl rounded-lg hover:scale-105 hover:bg-error hover:text-error-content transition-all">
        <div class="flex items-center space-x-4">
            <!-- Icon for Logout -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
            </svg>


            <!-- Text for Logout -->
            <div>
                <div class="text-2xl font-bold">Logout</div>
            </div>
        </div>
    </a>




</div>
