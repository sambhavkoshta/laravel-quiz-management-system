<x-layout>
    <x-slot name="main">
        <!-- Main Wrapper with Sky Blue to White Gradient Background -->
        <div class="flex flex-col items-center justify-center min-h-screen p-4 bg-gradient-to-br from-sky-400 to-white selection:bg-sky-500 selection:text-white">

            <div class="w-full max-w-md bg-white/90 backdrop-blur-md flex flex-col items-center p-8 rounded-3xl shadow-xl border border-white/20">

                <!-- Header with App Logo Icon Placeholder -->
                <div class="mb-2 flex h-12 w-12 items-center justify-center rounded-2xl bg-sky-500 text-white shadow-md shadow-sky-200">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>

                <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 mb-2">Welcome Back</h1>
                <p class="text-sm text-gray-500 text-center mb-8">Please enter your details to sign in</p>

                <!-- Logout Success Session Alert -->
                @if (session('logoutSuccess'))
                <div class="w-full mb-4 flex items-center p-4 text-sm text-green-800 border border-green-200 rounded-2xl bg-green-50 animate-fade-in" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <div>
                        <span class="font-semibold">{{ session('logoutSuccess') }}</span>
                    </div>
                </div>
                @endif

                <form action="{{url('/login')}}" method="post" class="space-y-5 w-full">
                    @csrf

                    <!-- Username Input Group -->
                    <div class="space-y-1">
                        <label for="username" class="text-xs font-semibold uppercase tracking-wider text-gray-600 block pl-1">Username</label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Enter Username"
                            class="w-full border @error('username') border-red-400 focus:ring-red-500/20 focus:border-red-500 @else border-gray-200 focus:ring-sky-500/20 focus:border-sky-500 @enderror bg-gray-50/50 focus:bg-white focus:outline-none focus:ring-4 px-4 py-3 rounded-2xl transition duration-200 text-gray-800 placeholder-gray-400">
                        @error('username')
                        <div class="text-xs font-medium text-red-500 flex items-center mt-1 pl-1">
                            <span class="mr-1">⚠️</span> {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Password Input Group -->
                    <div class="space-y-1">
                        <div class="flex justify-between items-center pl-1">
                            <label for="password" class="text-xs font-semibold uppercase tracking-wider text-gray-600 block">Password</label>
                            <a href="#" class="text-xs font-semibold text-sky-600 hover:text-sky-700 transition">Forgot?</a>
                        </div>
                        <input type="password" id="password" name="password" placeholder="••••••••"
                            class="w-full border @error('password') border-red-400 focus:ring-red-500/20 focus:border-red-500 @else border-gray-200 focus:ring-sky-500/20 focus:border-sky-500 @enderror bg-gray-50/50 focus:bg-white focus:outline-none focus:ring-4 px-4 py-3 rounded-2xl transition duration-200 text-gray-800 placeholder-gray-400">
                        @error('password')
                        <div class="text-xs font-medium text-red-500 flex items-center mt-1 pl-1">
                            <span class="mr-1">⚠️</span> {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Remember Me Option Placeholder (Optional) -->
                    <div class="flex items-center justify-between pl-1">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-sky-600 focus:ring-sky-500">
                            <label for="remember" class="ml-2 block text-xs text-gray-600 font-medium">Remember me</label>
                        </div>
                    </div>

                    <!-- Submit Button with Hover Effects -->
                    <button type="submit" class="text-center w-full bg-sky-500 hover:bg-sky-600 active:scale-[0.98] text-white py-3 rounded-2xl font-bold tracking-wide shadow-md shadow-sky-200 hover:shadow-lg transition-all duration-200">
                        Sign In
                    </button>
                </form>

                <!-- Footer Navigation -->
                <div class="mt-8 pt-6 border-t border-gray-100 w-full text-center">
                    <p class="text-sm text-gray-500">
                        Don't have an account?
                        <a href="{{url('/register')}}" class="text-sky-600 font-bold hover:text-sky-700 hover:underline transition ml-1">Create Account</a>
                    </p>
                </div>

            </div>
        </div>
    </x-slot>
</x-layout>