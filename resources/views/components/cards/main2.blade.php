@props(['product' => [], 'setting' => []])

<div class="card {{ $setting->category_colored_title ? 'bg-base-100 shadow-md' : 'bg-base-200' }} p-3">
    <!-- Title and Price -->
    <div class="flex justify-between items-center mb-2">
        <h2 class="card-title text-md font-bold">{{ $product->name }}</h2>
        <div class="flex items-center space-x-2">
            <span class="text-lg font-semibold text-orange-500">${{ fmod($product->price, 1) == 0 ? number_format($product->price, 0) : number_format($product->price, 2) }}</span>
        </div>
    </div>
    <p class="text-xs text-gray-500">
        {{ $product->description }}
        {{ $product->preparation_time && $setting->show_preparation_time ? ', Preparation Time : ' . $product->preparation_time . ' mins' : '' }}
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
