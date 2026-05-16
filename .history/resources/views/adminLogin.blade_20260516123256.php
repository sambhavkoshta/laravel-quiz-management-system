<x-layout>
    <x-slot name="main">
        <div class="flex min-h-[calc(100vh-4rem)] flex-col items-center justify-center bg-gray-900 px-4 sm:px-6 lg:px-8">

            <!-- Alert Notifications -->
            @if (session('logoutSuccess'))
            <div class="mb-4 w-full max-w-md rounded-md bg-green-950 p-4 text-sm text-green-400 shadow-sm border border-green-800">
                {{ session('logoutSuccess') }}
            </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
            <div class="mb-4 w-full max-w-md rounded-md bg-red-950 p-4 text-sm text-red-400 shadow-sm border border-red-800">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Admin Login Card Container -->
            <div class="w-full max-w-md rounded-xl bg-white p-8 shadow-2xl border border-gray-100">
                <div class="mb-6 text-center">
                    <!-- Visual indicator badge for admin context -->
                    <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10 mb-2">
                        Secure Terminal
                    </span>
                    <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Admin Login</h1>
                    <p class="mt-2 text-sm text-gray-500">Access administrative management control panels</p>
                </div>

                <form action="{{ url('/admin-login') }}" method="post" class="space-y-5">
                    @csrf

                    <!-- Username Input Field -->
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Admin Username</label>
                        <input type="text"
                            id="username"
                            name="username"
                            value="{{ old('username') }}"
                            placeholder="Enter Username"
                            required
                            autofocus
                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-red-600 focus:outline-none focus:ring-1 focus:ring-red-600 sm:text-sm">
                    </div>

                    <!-- Password Input Field -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password"
                            id="password"
                            name="password"
                            placeholder="••••••••"
                            required
                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-red-600 focus:outline-none focus:ring-1 focus:ring-red-600 sm:text-sm">
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-gray-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900 transition duration-150">
                            Authenticate
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>