<div class="p-6 max-w-4xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Product Image Section -->
        <div class="flex justify-center items-center">
            @if ($product->image)
                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                    class="w-full h-auto object-cover rounded-lg shadow-lg">
            @else
                <div class="w-full h-96 bg-gray-300 flex items-center justify-center rounded-lg">
                    <span class="text-gray-500">No Image Available</span>
                </div>
            @endif
        </div>

        <!-- Product Info Section -->
        <div class="space-y-4">
            <h1 class="text-3xl font-bold text-primary">{{ $product->name }}</h1>

            <p class="text-lg text-gray-700">{{ $product->description ?? 'No description available.' }}</p>

            <!-- Price Section -->
            <div class="flex items-center space-x-4">
                @if ($product->new_price)
                    <span class="text-xl font-semibold text-red-500 line-through">${{ number_format($product->price, 2) }}</span>
                    <span class="text-xl font-semibold text-green-600">${{ number_format($product->new_price, 2) }}</span>
                @else
                    <span class="text-xl font-semibold text-green-600">${{ number_format($product->price, 2) }}</span>
                @endif
            </div>

            <!-- Product Features (e.g., Vegetarian, Spicy, etc.) -->
            <div class="space-y-2">
                @if ($product->vegetarian)
                    <span class="badge badge-success">Vegetarian</span>
                @endif
                @if ($product->spicy)
                    <span class="badge badge-error">Spicy</span>
                @endif
                @if ($product->top_seller)
                    <span class="badge badge-warning">Top Seller</span>
                @endif
                @if ($product->new)
                    <span class="badge badge-primary">New</span>
                @endif
            </div>

            <!-- Product Category -->
            @if ($product->category)
                <div class="text-md text-gray-500">Category: <span class="text-primary">{{ $product->category->name }}</span></div>
            @endif

            <!-- Preparation Time -->
            @if ($product->preparation_time)
                <div class="text-md text-gray-500">Preparation Time: <span class="font-semibold">{{ $product->preparation_time }} min</span></div>
            @endif

            <!-- Availability -->
            <div class="flex items-center">
                <span class="text-md text-gray-500">Status: </span>
                <span class="font-semibold {{ $product->enabled ? 'text-green-500' : 'text-red-500' }}">
                    {{ $product->enabled ? 'Available' : 'Not Available' }}
                </span>
            </div>
        </div>
    </div>

    <!-- Back Button -->
    <div class="mt-6 text-center">
        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Back to Products</a>
    </div>
</div>
