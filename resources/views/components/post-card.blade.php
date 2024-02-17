@props(['post'])

<div class="col-span-3 md:col-span-1">
    <a href="#">
        <div>
            <img class="w-full rounded-xl" src="{{ $post->image }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="mb-2 flex items-center">
            <a class="mr-3 rounded-xl bg-red-600 px-3 py-1 text-sm text-white" href="#">
                Laravel
            </a>
            <p class="text-sm text-gray-500">{{ $post->published_at->diffForHumans() }}</p>
        </div>
        <a class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
    </div>
</div>
