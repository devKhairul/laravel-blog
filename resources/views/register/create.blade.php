<x-layout>

    <main>
        <div class="container mx-auto">
            <div class="mt-20 flex justify-center items-center">
                <div class="py-12 px-12 bg-blue-100 rounded shadow-xl z-20">
                  <div>
                    <h1 class="text-3xl font-bold text-center mb-4">Create An Account</h1>
                    <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide">and come along to enjoy the ride!</p>
                  </div>

                  <form method="POST" action="/register" autocomplete="off">
                    @csrf
                    <div class="space-y-4">
                        <input type="text"
                                name="username"
                                placeholder="Username"
                                class="block text-sm py-3 px-4 rounded w-full border outline-none focus-within:bg-yellow-100"
                                value="{{ old('username') }}" />

                        @error('username')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror

                        <input type="text"
                                name="name"
                                placeholder="Full Name"
                                class="block text-sm py-3 px-4 rounded w-full border outline-none focus-within:bg-yellow-100"
                                value="{{ old('name') }}" />

                        @error('name')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror

                        <input type="email"
                                name="email"
                                placeholder="Email"
                                class="block text-sm py-3 px-4 rounded w-full border outline-none focus-within:bg-yellow-100"
                                value="{{ old('email') }}" />

                        @error('email')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror

                        <input type="password" name="password" placeholder="Password" class="block text-sm py-3 px-4 rounded w-full border outline-none focus-within:bg-yellow-100" />

                        @error('password')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror

                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="block text-sm py-3 px-4 rounded w-full border outline-none focus-within:bg-yellow-100" />

                        @error('password_confirmation')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror

                      </div>
                      <div class="text-center mt-6">
                        <button class="py-3 w-full text-1xl text-white bg-blue-400 rounded">Create Account</button>
                        <p class="mt-4 text-sm">Already Have An Account? <span class="underline cursor-pointer"> Sign In</span></p>
                      </div>
                  </form>

                </div>
              </div>
        </div>
    </main>


</x-layout>
