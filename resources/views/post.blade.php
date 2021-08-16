<x-layout>
    <article class="my-4">
        <a href="/posts/{{ $post->slug }}">
            <h1 class="text-2xl bold">
                {{ $post->title }}
            </h1>
        </a>

        <p>
            Written by <a href="/author/{{ $post->user->username }}" class="text-blue-700 underline">{{ $post->user->name }}</a> In
            <a href="/category/{{ $post->category->slug }}" class="text-blue-700 underline">
                {{ $post->category->name }}
            </a>
        </p>

        <p>
            {{ $post->body }}
        </p>
    </article>
</x-layout>
