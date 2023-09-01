@props(['comment'])

<x-panel class="bg-gray-100">
    <article class="flex space-x-4">
        <div style="flex-shrink: 0">
            <img class="rounded-xl" src="https://i.pravatar.cc/100?u={{ $comment->user_id }}" alt="" width="80" />
        </div>

        <div>
            <header>
                <h3 class="font-bold">
                    {{ $comment->author->username }}
                </h3>

                <p class="text-xs">
                    Posted
                    <time> {{ $comment->created_at->diffForHumans() }} </time>
                </p>

                <p>
                    {!! $comment->body !!}
                </p>
            </header>
        </div>
    </article>
</x-panel>
