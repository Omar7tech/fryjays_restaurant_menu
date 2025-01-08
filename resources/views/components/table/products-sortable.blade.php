@props(['products' => []])

<div class="overflow-x-auto p-4">
    <ul wire:sortable="updateProductOrder" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($products as $product)
            <li wire:sortable.item="{{ $product->id }}" wire:key="product-{{ $product->id }}"
                class="p-4 border rounded-lg bg-base-100 shadow-md">

                <!-- Card Container -->
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body flex flex-col gap-4">
                        <!-- Top Section -->
                        <div class="flex items-center gap-4">
                            <!-- Sorting Handle -->
                            <span wire:sortable.handle class="cursor-move text-gray-500 hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </span>

                            <!-- Checkbox -->
                            <input type="checkbox" class="checkbox checkbox-primary" wire:change="updateEnabled({{ $product->id }})"
                                {{ $product->enabled ? 'checked' : '' }} />

                            <!-- Product Image -->
                            <div class="avatar">
                                <div class="mask mask-squircle w-20 h-20">
                                    <img src="{{ $product->image ? Storage::url($product->image) : Vite::asset('resources/images/no-image.png')}}" />
                                </div>
                            </div>
                        </div>

                        <!-- Product Info -->
                        <div class="text-center">
                            <h2 class="card-title">{{ $product->name }}</h2>
                            <p class="text-sm text-gray-500">{{ $product->description }}</p>
                        </div>

                        <!-- Tags Section -->
                        <div class="flex justify-center gap-2 flex-wrap">
                            <button wire:click="updateBestSeller({{ $product->id }})"
                                class="btn btn-xs {{ $product->top_seller ? 'btn-primary' : 'btn-outline btn-primary' }}">
                                <img class="w-4 h-4" src="{{ Vite::asset('resources/images/best-seller.png') }}" alt="">
                            </button>
                            <button wire:click="updateNew({{ $product->id }})"
                                class="btn btn-xs {{ $product->new ? 'btn-primary' : 'btn-outline btn-primary' }}">
                                <img class="w-4 h-4" src="{{ Vite::asset('resources/images/new.png') }}" alt="">
                            </button>
                            <button wire:click="updateSpicy({{ $product->id }})"
                                class="btn btn-xs {{ $product->spicy ? 'btn-primary' : 'btn-outline btn-primary' }}">
                                <img class="w-4 h-4" src="{{ Vite::asset('resources/images/red-chili-pepper.png') }}" alt="">
                            </button>
                            <button wire:click="updateVeg({{ $product->id }})"
                                class="btn btn-xs {{ $product->vegetarian ? 'btn-primary' : 'btn-outline btn-primary' }}">
                                <img class="w-4 h-4" src="{{ Vite::asset('resources/images/leaf.png') }}" alt="">
                            </button>
                        </div>

                        <!-- Price Section -->
                        <div class="text-center">
                            <span class="font-semibold {{ !$product->new_price ? 'text-success' : 'line-through text-error' }}">
                                {{ $product->price }}
                            </span>
                            @if ($product->new_price)
                                <span class="font-semibold text-success">
                                    {{ $product->new_price }}
                                    <button wire:click='deleteNewPrice({{ $product->id }})'
                                        class="ms-1 btn btn-xs btn-circle btn-outline">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </div>
                        <div class="flex justify-between">
                            <a wire:navigate href="{{ route("admin.products.image" , $product) }}" class="btn btn-sm">Image</a>
                            <a wire:navigate href="{{ route("admin.products.edit" , $product) }}" class="btn btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>


{{--  --}}
