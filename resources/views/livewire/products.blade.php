<div class="p-4">
    <div class="flex justify-between content-center">
        <h1 class="text-2xl font-bold mb-4">All Products</h1>
        <a class="btn btn-outline btn-success btn-sm" href="{{ route('admin.products.create') }}" wire:navigate>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </a>
    </div>
    <div class="search">
        <input wire:model.live="search" type="text" placeholder="Type to search" class="input input-bordered input-primary w-full max-w-xs" />
    </div>
    <!-- Responsive Table -->
    <div class="overflow-x-auto">
        <table class="table w-full table-zebra">
            <!-- Table Header -->
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>New Price</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <!-- Table Body -->
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <!-- Product Image -->
                        <td>
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                    @if ($product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" />
                                    @else
                                        <img src="{{ Vite::asset('resources/images/no-image.png') }}"
                                            alt="{{ $product->name }}" />
                                    @endif

                                </div>
                            </div>
                        </td>

                        <!-- Product Name -->
                        <td class="font-semibold">{{ $product->name }}</td>

                        <!-- Description -->
                        <td class="text-sm">{{ $product->description }}</td>

                        <!-- Price -->
                        <td
                            class="font-semibold {{ !$product->new_price ? 'text-success' : 'line-through text-error' }}">
                            ${{ $product->price }}
                        </td>

                        <!-- New Price -->
                        <td class="font-semibold text-success">
                            @if ($product->new_price)
                                ${{ $product->new_price }}
                            @else
                                -
                            @endif
                        </td>

                        <!-- Category -->
                        <td class="text-sm">{{ $product->category->name ?? 'Uncategorized' }}</td>

                        <!-- Actions -->
                        <td>
                            @php
                                $category = $product->category->id;
                            @endphp
                            <div class="flex gap-1">
                                <a wire:navigate href="{{ route('admin.products.category', $category) }}"
                                    class="btn btn-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>

                                </a>
                                <a wire:navigate href="{{ route('admin.products.edit', $product) }}"
                                    class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>
                                <a wire:navigate href="{{ route('admin.products.show', $product) }}"
                                    class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>
                                <a wire:navigate href="{{ route('admin.products.image', $product) }}"
                                    class="btn {{ $product->image ? 'btn-success' : 'btn-error' }} btn-primary btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $products->links() }}
    </div>
</div>
