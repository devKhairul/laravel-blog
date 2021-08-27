<x-layout>
    <section class="container mx-auto w-2/3 mt-20">
        <h1 class="text-4xl font-bold pb-6 underline">
            Publish New Post
        </h1>
        <form method="POST" action="/admin/posts" autocomplete="off">
            @csrf
            <div class="space-y-4">
                <input type="text"
                        name="title"
                        placeholder="title"
                        class="block text-sm py-3 px-4 rounded w-full border outline-none focus-within:bg-yellow-100"
                        value="{{ old('title') }}" />

                @error('title')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror

                <input type="text"
                        name="slug"
                        placeholder="slug"
                        class="block text-sm py-3 px-4 rounded w-full border outline-none focus-within:bg-yellow-100"
                        value="{{ old('slug') }}" />

                @error('slug')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror

                <textarea
                    name="excerpt"
                    class="block text-sm py-3 px-4 rounded w-full border outline-none focus-within:bg-yellow-100"
                    id="excerpt"
                    cols="30"
                    rows="3"
                    placeholder="excerpt"
                    required>{{ old('excerpt') }}</textarea>

                @error('excerpt')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror

                <textarea
                    name="body"
                    id="body"
                    class="block text-sm py-3 px-4 rounded w-full border outline-none focus-within:bg-yellow-100"
                    cols="30"
                    rows="10"
                    placeholder="body"
                    required>{{ old('body') }}</textarea>

                @error('body')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror

                <select name="category_id" id="category_id" class="w-full border p-2 rounded">
                    @foreach ($categories as $category )
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>

                @foreach ($errors as $error )
                    {{ $error }}
                @endforeach


              </div>
              <div class="text-center mt-6">
                <button type="submit" class="py-3 w-full text-1xl text-white hover:bg-blue-700 bg-blue-400 rounded">Publish</button>
              </div>
          </form>
    </section>
</x-layout>
