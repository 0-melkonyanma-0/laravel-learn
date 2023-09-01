<x-layout>
    <div class="d-flex justify-content-center p-2">
        <x-panel>
            <form class="" action={{ route('categories.store') }} method="POST">
                @csrf
                <label class="form-label">Title</label>
                <input type="text" name="tittle" class="form-control">
                <input type="submit" class="btn btn-primary mb-2 m-2">
            </form>
        </x-panel>
    </div>
</x-layout>
