<x-header />
<x-navbar-white />
    <div class="mx-10 my-20 md:mx-96 md:my-40">
        <x-messages />
        <div class="p-20 bg-white rounded-xl shadow-xl">
            <div class="flex flex-row gap-3 items-center p-2">
                <a href="javascript:history.back()" class="text-4xl font-bold text-blue-700">&lt;</a>
                <h1 class="text-5xl font-bold text-black">Register</h1>
            </div>
            <div class="my-4 mb-5 h-0.5 bg-gray-500 rounded-xl"></div>
            <form method="post" action="/register">
                @csrf
                <label>
                    <input type="text" name="username" placeholder="Username" required value="{{ old('username') }}"
                        class="px-5 py-2 mb-5 w-full text-gray-800 rounded-xl border-2 border-black bg-primary">
                    <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}"
                        class="px-5 py-2 mb-5 w-full text-gray-800 rounded-xl border-2 border-black bg-primary">
                    <input type="password" name="password" placeholder="Password" value="{{ old('password') }}"
                        class="px-5 py-2 mb-5 w-full text-gray-800 rounded-xl border-2 border-black bg-primary">
                    <input type="password" name="confirm_password" placeholder="Confirm Password"
                        class="px-5 py-2 mb-5 w-full text-gray-800 rounded-xl border-2 border-black bg-primary">
                    <button
                        class="px-5 py-2 w-full text-lg text-white bg-blue-700 rounded-xl duration-300 hover:bg-blue-500 hover:text-black">
                        Register
                    </button>
                    <p class="mt-5 text-sm text-center">Already have account? <a href="/login"
                            class="text-blue-500">Login</a></p>
                </label>
            </form>
        </div>
    </div>

<x-footer />