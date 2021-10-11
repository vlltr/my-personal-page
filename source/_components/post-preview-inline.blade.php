<div class="flex flex-col mb-6 bg-white p-6 rounded-2xl shadow-lg">
    @if ($post->cover_image)
        <img class="h-40 rounded-2xl w-full object-cover mb-4" src="{{ $post->cover_image }}" alt="">
    @endif

    <p class="text-gray-700 font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="text-3xl mt-0">
        <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}"
            class="text-gray-900 font-extrabold">{{ $post->title }}</a>
    </h2>


    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

    <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2">Read</a>

</div>
