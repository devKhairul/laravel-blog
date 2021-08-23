@props(['comment'])

<article class="flex bg-gray-100 rounded-xl border-gray-200 p-6">
    <div>
        <img src="https://i.pravatar.cc/400" class="rounded" alt="Avatar">
    </div>

    <div class="ml-4">
        <header>
            <h3 class="font-bold">{{ $comment->user->name }}</h3>

            <p class="text-xs">
                Posted
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>

            <p>
                {{ $comment->body }}
            </p>
        </header>
    </div>
</article>
