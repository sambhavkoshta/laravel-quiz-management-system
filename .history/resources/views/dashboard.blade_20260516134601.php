<x-layout>
    <x-slot name="main">
        @if (session('loginSuccess'))
        <div>
            {{ session('loginSuccess') }}
        </div>
        @endif

        @if (session('registeredSuccess'))
        <div>
            {{ session('registeredSuccess') }}
        </div>
        @endif

        @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif

        <div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
            <div class="w-full max-w-lg bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-blue-600 text-white p-5">
                    <h1 class="text-3xl font-bold text-center">
                        Student Dashboard
                    </h1>
                </div>
                <div class="p-6 space-y-4 text-gray-700">
                    <p>
                        <span class="font-semibold">
                            Welcome :
                        </span>
                        {{session('student')->username}}
                    </p>
                    <p>
                        <span class="font-semibold">
                            Email :
                        </span>
                        {{session('student')->email}}
                    </p>
                    <p>
                        <span class="font-semibold">
                            Created At :
                        </span>
                        {{session('student')->created_at}}
                    </p>
                    <div class="flex gap-4 pt-4">
                        <a
                            href="{{url('/edit/'.session('student')->id)}}"

                            class="bg-blue-600 text-white
                px-4 py-2 rounded-xl
                hover:bg-blue-700 transition">

                            Edit Profile

                        </a>

                        <a
                            href="{{url('/change-password/'.session('student')->id)}}"

                            class="bg-gray-700 text-white
                px-4 py-2 rounded-xl
                hover:bg-gray-800 transition">

                            Change Password

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </x-slot>
</x-layout>