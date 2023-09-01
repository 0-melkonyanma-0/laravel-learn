<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 container w-50">
        <div class="d-flex justify-content-between mb-5">
            <a href="{{ route('posts.index') }}" class="btn btn-success">
               Posts
            </a>
            @auth
                <a href="{{ route('authors.index') }}" class="btn btn-success">
                Authors
                </a>
                <a href="{{ route('categories.index') }}" class="btn btn-success">
                    Categories
                </a>
            @endauth
        </div>

        <div>
            <h1>About blog.</h1>
        </div>

        <div class="fs-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, labore deleniti ad dicta distinctio sit reiciendis, quo nisi omnis quia corrupti fuga consectetur, magnam cum vero facilis fugit minima aspernatur.
            Vel ipsa debitis, tenetur odio quo nam nostrum nobis. Reprehenderit minus voluptates veritatis quae necessitatibus iusto consequatur voluptatum, at, modi et optio molestiae, consectetur qui ipsa. Unde ad corporis laboriosam!
            Reiciendis adipisci, voluptatibus minus a, et voluptate accusamus minima totam veniam pariatur blanditiis autem itaque ab officiis. Laudantium, provident. Quas doloremque cum magni ducimus incidunt nemo eaque quae tenetur cumque?
            Quaerat rem laudantium et non dolore maxime voluptatibus quos ratione deserunt neque, hic praesentium, unde in explicabo ullam id molestias omnis illum soluta dolor necessitatibus assumenda numquam vitae nostrum. Voluptas.
            Voluptas, voluptatem molestiae eaque commodi libero quidem reprehenderit nemo sequi hic consequuntur distinctio alias eveniet magnam assumenda aperiam perspiciatis unde quae dolores. Laborum veniam voluptatem ab animi in ipsum error?
            Doloremque, culpa sit dignissimos cum aperiam iure ab ut. Quis doloremque dolorem dolor, molestiae temporibus provident tenetur natus, odio quod ratione esse nisi ducimus sed? Soluta cupiditate fugiat culpa laudantium.
            Provident excepturi molestias totam deleniti ex dolor quod maxime? Neque cupiditate labore incidunt. Distinctio perferendis quisquam quidem hic, laborum quibusdam ea saepe ex laudantium earum quo maxime. Alias, nostrum iure!
            Veritatis maiores vel aspernatur nobis fugit ipsa ratione atque voluptates tempore obcaecati, velit natus enim numquam. Amet, perferendis! Perspiciatis voluptatem sit nulla eum in eos culpa porro hic, officia provident.
        </div>
    </main>
</x-layout>
