<x-guest-layout>

    <div class="backdrop-blur-xl bg-white/10 border border-white/20 shadow-2xl rounded-2xl p-8 text-white opacity-0 animate-login-card">

        <!-- TITLE -->
        <h2 class="text-2xl font-bold text-center mb-2">
            Welcome Back
        </h2>

        <p class="text-center text-white/70 text-sm mb-6">
            Sign in to WAGE Admin Dashboard
        </p>

        <!-- STATUS -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- EMAIL -->
            <div>
                <x-input-label for="email" value="Email" class="text-white/80" />

                <x-text-input id="email"
                    class="block mt-1 w-full bg-white/10 border-white/20 text-white placeholder-white/50 focus:border-green-400 focus:ring-green-400"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300" />
            </div>

            <!-- PASSWORD -->
            <div>
                <x-input-label for="password" value="Password" class="text-white/80" />

                <x-text-input id="password"
                    class="block mt-1 w-full bg-white/10 border-white/20 text-white placeholder-white/50 focus:border-green-400 focus:ring-green-400"
                    type="password"
                    name="password"
                    required />

                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300" />
            </div>

            <!-- REMEMBER -->
            <div class="flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500"
                    name="remember">

                <label for="remember_me" class="ms-2 text-sm text-white/70">
                    Remember me
                </label>
            </div>

            <!-- BUTTON -->
            <button type="submit"
                class="w-full bg-gradient-to-r from-green-600 to-green-500 hover:from-green-700 hover:to-green-600 text-white font-bold py-3 rounded-xl transition">
                Log in
            </button>

            <!-- FORGOT -->
            @if (Route::has('password.request'))
                <div class="text-center mt-3">
                    <a class="text-sm text-white/60 hover:text-white underline"
                       href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                </div>
            @endif

        </form>

    </div>

</x-guest-layout>