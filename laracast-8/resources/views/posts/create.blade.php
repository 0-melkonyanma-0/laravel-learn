<x-layout>
    <div class="d-flex justify-content-center p-2">
        <x-panel>
            <form class="" action={{ route('posts.store') }} method="POST">
                @csrf

                <label class="form-label">Title</label>
                <input class="form-control" type="text" name="tittle">
                <label class="form-label">User</label>
                <select class="form-select" name="name">
                    @foreach ($users as $user)
                        <option>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label">Category</label>
                <select class="form-select" name="category">
                    @foreach ($categories as $category)
                        <option>
                            {{ $category->tittle }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label">Body</label>
                <textarea name="body" class="form-control">
			</textarea>
                <input type="submit" class="btn btn-primary mb-2 m-2">
            </form>
        </x-panel>
    </div>
</x-layout>
