@props(['product' => [], 'setting' => []])

<div
    class="{{ $product->top_seller ? 'border border-yellow-500' : '' }}  bg-base-100 shadow-md hover:shadow-lg rounded-lg overflow-hidden transition-shadow duration-300 ease-in-out p-4">
    <div class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            @if ($product->new)
                <img class="h-7 w-7 mr-2" src="{{ vite::asset('resources/images/new.png') }}" alt="New Icon" />
            @endif

            @if ($product->top_seller)
                <img class="h-8 w-8 mr-2" src="{{ vite::asset('resources/images/best-seller.png') }}" alt="Vegetarian" />
            @endif
            <h2 class="text-lg font-bold">{{ $product->name }}</h2>
        </div>

        <div class="flex items-center space-x-1">
            @if ($setting->show_spicy_vegan)
                @if ($product->spicy)
                    <img class="h-5 w-5" src="{{ vite::asset('resources/images/red-chili-pepper.png') }}"
                        alt="Spicy" />
                @endif

                @if ($product->vegetarian)
                    <img class="h-5 w-5" src="{{ vite::asset('resources/images/leaf.png') }}" alt="Vegetarian" />
                @endif
            @endif

        </div>
    </div>


    <div class="flex items-start space-x-4">


        @if ($setting->show_images)
            <div x-data="{ open: false }" class="h-20 w-20 flex-shrink-0">
                <!-- Thumbnail Image -->
                <img loading="lazy"
                    src="{{ $product->image ? Storage::url($product->image) : Vite::asset('resources/images/no-image.png') }}"
                    alt="{{ $product->name }}" class="h-full w-full object-cover rounded-md shadow-md cursor-pointer"
                    @click="open = true" />


                <!-- Modal -->
                <template x-if="open">
                    <div @click.self="open = false"
                        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50">
                        <img src="{{ $product->image ? Storage::url($product->image) : Vite::asset('resources/images/no-image.png') }}"
                            alt="{{ $product->name }}" class="max-h-[90vh] max-w-[90vw] rounded-md shadow-lg" />
                    </div>
                </template>
            </div>
        @endif






        <div class="flex-1">
            @if ($setting->show_description)
                <p class="text-sm text-gray-500">
                    {{ $product->description }}
                    {{ $product->preparation_time && $setting->show_preparation_time ? ', Preparation Time : ' . $product->preparation_time . ' mins' : '' }}
                </p>
            @endif

            <!-- Price -->
            <div class="flex justify-between items-center mt-2">
                <div class="flex space-x-2 ">
                    @if ($setting->show_sale)
                        @if ($product->price)
                            <div class="flex items-center space-x-2">
                                @if ($product->new_price)
                                    <span class="text-lg font-semibold text-gray-400 line-through">
                                        ${{ fmod($product->price, 1) == 0 ? number_format($product->price, 0) : number_format($product->price, 2) }}
                                    </span>
                                    <span class="text-lg font-semibold text-orange-500">
                                        ${{ fmod($product->new_price, 1) == 0 ? number_format($product->new_price, 0) : number_format($product->new_price, 2) }}
                                    </span>
                                @else
                                    <span class="text-lg font-semibold text-orange-500">
                                        ${{ fmod($product->price, 1) == 0 ? number_format($product->price, 0) : number_format($product->price, 2) }}
                                    </span>
                                @endif
                                @if ($setting->show_lebanese_currency)
                                    <span class="font-light text-xs">
                                        @if ($product->new_price)
                                            {{ number_format($product->new_price * $setting->lebanese_currency, 0) }}
                                            <span class="text-xs">LL</span>
                                        @else
                                            {{ number_format($product->price * $setting->lebanese_currency, 0) }} <span
                                                class="text-xs">LL</span>
                                        @endif
                                    </span>
                                @endif
                            </div>
                        @endif
                    @else
                        @if ($product->price)
                            <div class="flex items-center space-x-2">
                                <span class="text-lg font-semibold text-orange-500">
                                    ${{ fmod($product->price, 1) == 0 ? number_format($product->price, 0) : number_format($product->price, 2) }}
                                </span>
                                @if ($setting->show_lebanese_currency)
                                    <span class="font-light text-xs">
                                        {{ number_format($product->price * $setting->lebanese_currency, 0) }} <span
                                            class="text-xs">LL</span>
                                    </span>
                                @endif
                            </div>
                        @endif
                    @endif

                </div>
            </div>

        </div>
    </div>

    @if ($setting->show_sizes)
        @if ($product->small || $product->large)
            <div class="mt-3">
                <x-cards.sizes :$product />
            </div>
        @endif
    @endif
    <!-- Sizes -->

</div>
