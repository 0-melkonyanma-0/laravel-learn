<x-layout>
	@include('posts._header')

	@if($category->loadMissing('posts')->posts()->count() > 0)
		<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
			<x-posts-grid
                :posts="
                        $category->posts
                    "
            />
		</main>
	@else
		<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 text-center">
			No posts in <b>{{$category->tittle}}</b> yet. Check back later.
		</main>
	@endif

</x-layout>
