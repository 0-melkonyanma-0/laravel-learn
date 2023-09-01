<x-layout>
    <div class="container mt-4 w-50">
        <div class="card p-3 bg-success border-dark">
            <div class="h1 d-flex justify-content-center">
                <b class="me-2">{{ $author->name }}'s</b>posts
            </div>
        </div>
    </div>

    <div class="container w-50 pt-2">
        @if (count($author->posts) == 0)
            <div class="card mb-2 p-5">
                <div class="d-flex justify-content-center">
                    {{ __('There is nothing here.') }}
                </div>
            </div>
        @else
            @foreach ($author->posts as $post)
                <div class="card mb-2 mt-2 p-2 border-dark">
                    <a href="{{ route('posts.index') }}/{{ $post->slug }}" class="text-black">
                        <h4><b>{{ $post->tittle }}</b></h4>
                    </a>
                    <h5>{!! $post->excerpt !!}</h5>
                    <h6 class="text-muted text-end me-2">{{ $post->created_at }}</h6>
                </div>
            @endforeach
        @endif
    </div>
</x-layout>
