<x-layout>
    <x-slot name="main">
        <div class="flex min-h-[calc(100vh-4rem)] flex-col items-center justify-center bg-gray-50 px-4 sm:px-6 lg:px-8">

            <!-- Alert Notifications -->
            @if (session('logoutSuccess'))
            <div class="mb-4 w-full max-w-md rounded-md bg-green-50 p-4 text-sm text-green-700 shadow-sm border border-green-200">
                {{ session('logoutSuccess') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="mb-4 w-full max-w-md rounded-md bg-red-50 p-4 text-sm text-red-700 shadow-sm border border-red-200">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="w-full max-w-md rounded-xl bg-white p-8 shadow-md border border-gray-100">
                <div class="mb-6 text-center">
                    <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Sign In</h1>
                    <p class="mt-2 text-sm text-gray-500">Access your Quiz System dashboard</p>
                </div>

                <form action="{{ url('/login') }}" method="post" class="space-y-5">
                    @csrf

                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                        <input type="text"
                            id="username"
                            name="username"
                            value="{{ old('username') }}"
                            placeholder="Enter Username"
                            required
                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password"
                            id="password"
                            name="password"
                            placeholder="••••••••"
                            required
                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm">
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-blue-700 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 transition duration-150">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>