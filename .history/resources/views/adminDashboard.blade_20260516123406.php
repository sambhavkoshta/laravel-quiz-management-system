<x-layout>
    <x-slot name="main">
        <div class="min-h-[calc(100vh-4rem)] bg-gray-900 px-4 py-8 sm:px-6 lg:px-8 text-gray-100">
            <div class="max-w-6xl mx-auto space-y-6">

                <!-- Top Header Bar -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 bg-gray-800 p-6 rounded-2xl border border-gray-700 shadow-lg">
                    <div>
                        <span class="inline-flex items-center rounded-md bg-red-500/10 px-2 py-1 text-xs font-medium text-red-400 ring-1 ring-inset ring-red-500/20 mb-1">
                            Control Terminal
                        </span>
                        <h1 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-white">Admin Dashboard</h1>
                        <p class="text-sm text-gray-400 mt-1">Logged in as: <span class="text-gray-200 font-semibold">{{ session('admin')->username }}</span> ({{ session('admin')->email }})</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{ url('/admin-logout') }}"
                            class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-gray-300 bg-gray-700 hover:bg-gray-600 rounded-md border border-gray-600 shadow-sm transition duration-150">
                            Log Out
                        </a>
                    </div>
                </div>

                <!-- Session Notifications Group -->
                @php
                $alertMessage = session('loginSuccess') ?? session('registeredSuccess') ?? session('success') ?? session('category');
                @endphp

                @if ($alertMessage)
                <div class="w-full rounded-md bg-emerald-950/50 p-4 text-sm text-emerald-400 shadow-sm border border-emerald-800/60">
                    {{ $alertMessage }}
                </div>
                @endif

                <!-- Analytics Summary Matrix Grid -->
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">

                    <!-- Card 1: Total Students -->
                    <div class="relative overflow-hidden rounded-2xl border border-gray-800 bg-gray-800 px-4 py-5 shadow-sm sm:p-6 transition hover:border-gray-700">
                        <dt class="truncate text-sm font-medium text-gray-400 uppercase tracking-wider">Total Students</dt>
                        <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                            <div class="flex items-baseline text-3xl font-semibold text-white">
                                {{ $student->count() }}
                            </div>
                        </dd>
                    </div>

                    <!-- Card 2: Total Categories -->
                    <div class="relative overflow-hidden rounded-2xl border border-gray-800 bg-gray-800 px-4 py-5 shadow-sm sm:p-6 transition hover:border-gray-700">
                        <dt class="truncate text-sm font-medium text-gray-400 uppercase tracking-wider">Total Categories</dt>
                        <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                            <div class="flex items-baseline text-3xl font-semibold text-white">
                                {{ $categories->count() }}
                            </div>
                        </dd>
                    </div>

                    <!-- Card 3: Total Quizzes -->
                    <div class="relative overflow-hidden rounded-2xl border border-gray-800 bg-gray-800 px-4 py-5 shadow-sm sm:p-6 transition hover:border-gray-700">
                        <dt class="truncate text-sm font-medium text-gray-400 uppercase tracking-wider">Total Quizzes</dt>
                        <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                            <div class="flex items-baseline text-3xl font-semibold text-white">
                                {{ $quizzes->count() }}
                            </div>
                        </dd>
                    </div>

                </div>

                <!-- Detailed Settings Metadata Block -->
                <div class="bg-gray-800 rounded-2xl shadow-lg border border-gray-700 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-700 bg-gray-800/50">
                        <h2 class="text-lg font-bold text-white">System Properties</h2>
                    </div>
                    <div class="p-6 divide-y divide-gray-700/50 text-sm">
                        <div class="flex justify-between py-3">
                            <span class="text-gray-400">Account Created</span>
                            <span class="text-gray-200 font-medium">
                                {{ \Carbon\Carbon::parse(session('admin')->created_at)->format('M d, Y — H:i') }}
                            </span>
                        </div>
                        <div class="flex justify-between py-3">
                            <span class="text-gray-400">Environment Mode</span>
                            <span class="text-amber-400 font-mono font-medium">Production Terminal</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </x-slot>
</x-layout>