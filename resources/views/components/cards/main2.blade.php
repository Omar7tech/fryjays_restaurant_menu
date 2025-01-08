@props(['product' => [] , 'setting' => []])

<div class="card bg-base-100 shadow-xl p-5">
    <!-- Title and Price -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="card-title text-xl font-bold">{{ $product->name }}</h2>
        <div class="flex items-center space-x-2">
            <span class="text-lg font-semibold text-orange-500">${{ number_format($product->price) }}</span>
        </div>
    </div>
    <p class="text-sm text-gray-500">
        {{ $product->description }}
    </p>
    <!-- Sizes -->
    @if ($setting->show_sizes)
        @if ($product->small || $product->large)
            <div class="">
                <x-cards.sizes :$product />
            </div>
        @endif
    @endif
</div>
