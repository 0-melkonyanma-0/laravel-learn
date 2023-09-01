@auth
    <x-panel>
        <form action="{{ route('comments.store', ['post' => $post]) }}" method="POST">
            @csrf
            <header class="flex">
                <img class="rounded-xl" src="https://i.pravatar.cc/100?u={{ auth()->user()->id }}" alt="" width="40"
                    height="40" />

                <h2 class="ms-3">
                    Want to participate?
                </h2>

            </header>
            <div class="mt-6">
                <textarea
                    class="w-full text-small
                                                focus:outline-none focus:ring border border-gray-200 rounded-xl p-2"
                    rows="5" placeholder="Quick, thing of something to say!" name="body" required>
                                </textarea>

                @error('body')
                    <p class="text-danger text-xs">
                        {{ __($message) }}
                    </p>
                @enderror
            </div>
            <div class="d-flex justify-content-end mt-2">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <a href="{{ route('register.create') }}">
        Register
    </a>
    or
    <a href="{{ route('login.create') }}">
        log In
    </a>
    to leave a comment
@endauth
