<x-app-layout>
    <div class="w-full py-32 text-center">
        <h1 class="text-center text-2xl font-bold text-gray-700 md:text-3xl lg:text-5xl">
            Welcome to <span class="text-blue-500">&lt;xMazlan&gt;</span>
        </h1>
        <p class="mt-1 text-lg text-gray-500">Best Blog in the universe</p>
        <a class="mt-5 inline-block rounded bg-gray-800 px-3 py-2 text-lg text-white"
            href="http://127.0.0.1:8000/blog">Start
            Reading</a>
    </div>

    <main class="container mx-auto flex flex-grow px-5">
        <div class="mb-10">
            <div class="mb-16">
                <h2 class="mb-5 mt-16 text-3xl font-bold text-yellow-500">Featured Posts</h2>
                <div class="w-full">
                    <div class="grid w-full grid-cols-3 gap-10">

                        @foreach ($featuredPosts as $post)
                            <x-post-card :$post />
                        @endforeach

                    </div>
                </div>
                <a class="mt-10 block text-center text-lg font-semibold text-yellow-500"
                    href="http://127.0.0.1:8000/blog">More
                    Posts</a>
            </div>

            <hr>

            <h2 class="mb-5 mt-16 text-3xl font-bold text-yellow-500">Latest Posts</h2>
            <div class="mb-5 w-full">
                <div class="grid w-full grid-cols-3 gap-10 gap-y-32">

                    @foreach ($latestPosts as $post)
                        <x-post-card :$post />
                    @endforeach

                </div>
            </div>
            <a class="mt-10 block text-center text-lg font-semibold text-yellow-500"
                href="http://127.0.0.1:8000/blog">More
                Posts</a>
        </div>
    </main>
</x-app-layout>
