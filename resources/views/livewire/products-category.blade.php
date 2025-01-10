<div>
    <div class="my-2 font-bold text-center">Category : {{ $category->name }}</div>
    <x-btn.back />
    <x-table.products-sortable :$products />
</div>
