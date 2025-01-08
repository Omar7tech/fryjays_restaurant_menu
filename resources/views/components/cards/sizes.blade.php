@props(["product" => []])
<div class="flex space-x-2 mt-2">
    @if ($product->small)
        <div
            class="flex items-center border border-base-300 rounded-md p-2 text-center hover:bg-base-200 transition-all duration-300 justify-center">
            <div class="flex items-center space-x-2">
                <span class="text-sm font-medium text-base-700">small</span>
                <span class="text-sm font-semibold text-base-500">${{ fmod($product->small, 1) == 0 ? number_format($product->small, 0) : number_format($product->small, 2) }}</span>
            </div>
        </div>
    @endif

    @if ($product->large)
        <div
            class="flex items-center border border-base-300 rounded-md p-2 text-center hover:bg-base-200 transition-all duration-300 justify-center">
            <div class="flex items-center space-x-2">
                <span class="text-sm font-medium text-base-700">large</span>
                <span class="text-sm font-semibold text-base-500">${{ fmod($product->large, 1) == 0 ? number_format($product->large, 0) : number_format($product->large, 2) }}</span>
            </div>
        </div>
    @endif
</div>
