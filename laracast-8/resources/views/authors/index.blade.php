<x-layout>
    <div class="container w-50 pt-2">
        @if (count($authors) == 0)
            <div class="card mb-2 p-5">
                <div class="d-flex justify-content-center">
                    {{ __('There is nothing here.') }}
                </div>
            </div>
        @else
            @foreach ($authors as $author)
                <a href="{{ route('posts.index') }}/?author={{ $author->username }}">
                    <x-panel>
                        <h4>{{ $author->name }}</h4>
                    </x-panel>
                </a>
            @endforeach
        @endif
    </div>
</x-layout>
