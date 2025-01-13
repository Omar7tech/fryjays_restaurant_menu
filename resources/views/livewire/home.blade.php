<div>

    <div class="relative h-full w-full">
        <div
            class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]">
        </div>
        <div class="hero">
            <div class="container flex justify-center items-center flex-col">
                @if ($setting->show_logo)
                    <div id="icon">
                        <img src="{{ Vite::asset('resources/images/logo.png') }}" id="neon-glow" alt="Logo"
                            class="animate-fade-in-scale">
                    </div>
                @endif
                <div class="text-center text-2xl font-bold animated-gradient-text py-2">
                    <p>
                        {{ $setting->hero_text }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center container flex justify-center items-center flex-col {{ $setting->show_search ? '' : 'hidden' }}">
        <label class="input input-bordered flex items-center gap-2">
            <!-- Search Input -->
            <input
                type="text"
                class="grow"
                placeholder="Search"
                wire:model.live="search"
            />

            <!-- Show Search Icon if Input is Empty -->
            @if (empty($search))
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                    <path fill-rule="evenodd"
                        d="M9.965 11.026a5 5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                        clip-rule="evenodd" />
                </svg>
            @else
                <!-- Show Red "X" Button to Clear Input -->
                <button type="button" wire:click="$set('search', '')" class="text-red-500 hover:text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            @endif
        </label>
    </div>




    <div class="space-y-2 mt-5">
        @if (empty($search))
            @foreach ($categories as $category)
                <div class="collapse collapse-plus bg-base-200">
                    <input type="radio" name="my-accordion-3" {{ $loop->first ? 'checked' : '' }} />
                    <div class="collapse-title text-xl font-bold">
                        @if ($setting->category_colored_title)
                            <span
                                class="text-3xl text-orange-600">{{ strtoupper($category->name[0]) }}</span>{{ substr($category->name, 1) }}
                        @else
                            <span>{{ $category->name }}</span>
                        @endif

                    </div>

                    <div class="collapse-content">
                        <div class="">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach ($category->products as $product)
                                    @if ($product->design == 1)
                                        <x-cards.main :$product :$setting />
                                    @else
                                        <x-cards.main2 :$product :$setting />
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            @if (count($s_products) > 0)
                <div class="bg-base-200 rounded-sm p-5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($s_products as $product)
                        @if ($product->design == 1)
                            <x-cards.main :$product :$setting />
                        @else
                            <x-cards.main2 :$product :$setting />
                        @endif
                    @endforeach
                </div>
            @else
                <div class="text-center text-gray-500">
                    No products found for "{{ $search }}".
                </div>
            @endif
        @endif

    </div>


    <div class="relative h-full w-full mt-5">
        <div
            class="absolute h-full w-full bg-[radial-gradient(#616161_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_60%,transparent_100%)]">
        </div>
        <div class="py-10">

            @if ($setting->show_socials)
            <div wire:ignore>
                <x-social.main :$setting />
            </div>

            @endif

            @if ($setting->show_location)
                <x-social.location :$setting />
            @endif
        </div>
    </div>



    @if (isset($setting->phone))
        <div class="fixed bottom-5 right-5">
            <a href="tel:{{ $setting->phone }}"
                class="bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
            </a>
        </div>
    @endif

    <script>
        // Select all the icon items
        const iconItems = document.querySelectorAll('.icon-item');

        // Set up IntersectionObserver
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, {
            threshold: 0.5
        }); // Trigger when 50% of the element is in the viewport

        // Observe each icon item
        iconItems.forEach(item => observer.observe(item));
    </script>
</div>
