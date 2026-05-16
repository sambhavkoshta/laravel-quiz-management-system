<x-layout>
    <x-slot name="main">
        <div class="min-h-[calc(100vh-4rem)] bg-gray-50 px-4 py-8 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto space-y-4">

                <!-- Status Notifications -->
                @php
                $statusMessage = session('loginSuccess') ?? session('registeredSuccess') ?? session('success');
                @endphp

                @if ($statusMessage)
                <div class="w-full rounded-md bg-green-50 p-4 text-sm text-green-700 shadow-sm border border-green-200">
                    {{ $statusMessage }}
                </div>
                @endif

                <!-- Dashboard Profile Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

                    <!-- Header Banner Section -->
                    <div class="bg-blue-700 px-6 py-8 text-white">
                        <h1 class="text-2xl sm:text-3xl font-bold">Student Dashboard</h1>
                        <p class="mt-1 text-blue-100 text-sm sm:text-base">Welcome back, {{ session('student')->username }}!</p>
                    </div>

                    <div class="p-6 space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 py-3 border-b border-gray-100">
                            <span class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Username</span>
                            <span class="text-base text-gray-900 sm:col-span-2">{{ session('student')->username }}</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 py-3 border-b border-gray-100">
                            <span class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Email Address</span>
                            <span class="text-base text-gray-900 sm:col-span-2 break-all">{{ session('student')->email }}</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 py-3 border-b border-gray-100">
                            <span class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Joined On</span>
                            <span class="text-base text-gray-900 sm:col-span-2">
                                {{ \Carbon\Carbon::parse(session('student')->created_at)->format('M d, Y') }}
                            </span>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-6 py-4 flex flex-col sm:flex-row sm:justify-end gap-3 border-t border-gray-100">
                        <a href="{{ url('/edit/'.session('student')->id) }}"
                            class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                            Edit Profile
                        </a>
                        <a href="{{ url('/change-password/'.session('student')->id) }}"
                            class="inline-flex justify-center items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 border border-transparent rounded-md shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                            Change Password
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </x-slot>
</x-layout>