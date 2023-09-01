<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold text-left inline-flex w-full lg:w-32">
            {{ isset($selectCategory->tittle) ? ucwords($selectCategory->tittle) : 'Categories' }}
            <x-icon name="down-arrow" class="absolute pointer-events-none" />
        </button>
    </x-slot>

    <x-dropdown-item href="{{ route('posts.index') }}/?{{ http_build_query(request()->except('category')) }}"
        class="{{ !isset($selectCategory) ? 'bg-gray-300 text-white' : '' }}">
        All
    </x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item
            href="{{ route('posts.index') }}/?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}"
            class="{{ isset($selectCategory) && $selectCategory->is($category) ? 'bg-gray-300 text-white' : '' }}">
            {{ ucwords($category->tittle) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
