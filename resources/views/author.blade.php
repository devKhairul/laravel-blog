<x-layout>

    <p class="text-3xl">All articles posted by this Author</p>

    @foreach($posts as $post)


        <article class="my-4">
            <a href="/posts/{{ $post->slug }}">
                <h1 class="text-2xl bold">
                    {{ $post->title }}
                </h1>
            </a>

            <p>
                In
                <a href="/category/{{ $post->category->slug }}" class="text-blue-700 underline">
                    {{ $post->category->name }}
                </a>
            </p>

            <p>
                {{ $post->body }}
            </p>
        </article>

    @endforeach
</x-layout>
