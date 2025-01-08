<div>
    <div class="flex justify-between content-center">
        <span class="font-bold">Categories</span>
        <a class="btn btn-outline btn-success btn-sm" href="{{ route('admin.categories.create') }}" wire:navigate>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </a>
    </div>
    <div class="divider"></div>
    <ul class="menu menu-md bg-base-200 rounded-box" wire:sortable="updateCategoryOrder">
        @foreach ($categories as $category)
            <li wire:sortable.item="{{ $category->id }}" class="mb-2">
                <div class="flex justify-between">
                    <div class="flex space-x-2">

                        <input type="checkbox" @if ($category->enabled) checked="checked" @endif
                            class="checkbox checkbox-sm {{ $category->enabled ? 'checkbox-success' : 'checkbox-error' }}"
                            wire:change="updateEnabled({{ $category->id }})" />
                        <span wire:sortable.handle>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </span>
                        @php
                            $count = $category->products->count();
                        @endphp
                        <div class="space-x-2">
                            <span>{{ $category->name }}</span>
                            <div class="badge {{ $count == 0 ? 'badge-error' : 'badge-success' }} font-bold ">{{ $count }}</div>
                        </div>
                    </div>
                    <div>
                        <div class="join">
                            <a wire:navigate href="{{ route('admin.categories.edit', $category) }}"
                                class="btn join-item btn-sm btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                            <a href="{{ route('admin.products.category', $category) }}"
                                {{ $category->products->count() == 0 ? 'disabled' : '' }}
                                class="btn join-item btn-sm btn-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="divider divider-secondary">
        <span class="font-bold">
            {{ $categories->count() }}
        </span>
    </div>
    <div role="alert" class="alert alert-info mt-3">
        <span class="text-sm">Drag and drop to sort categories</span>
    </div>
</div>
