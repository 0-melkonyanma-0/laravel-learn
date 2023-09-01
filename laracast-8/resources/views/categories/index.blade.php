<x-layout>

    <div class="container w-50 pt-2">
        @if (count($categories) == 0)
            <div class="card mb-2 p-5">
                <div class="d-flex justify-content-center">
                    {{ __('There is nothing here.') }}
                </div>
            </div>
        @else
            @foreach ($categories as $category)
                <div class="card mb-2 mt-2 p-2">
                    <a href="{{ route('posts.index') }}/?category={{ $category->slug }}">
                        <h4>{{ $category->tittle }}</h4>
                    </a>
                    <h6 class="text-muted text-end me-2">{{ $category->created_at }}</h6>
                </div>
            @endforeach
        @endif
    </div>

</x-layout>
