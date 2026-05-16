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

        <div class="m-4 flex flex-col items-center text-left justify-center bg-white  rounded-2xl">
            <div class="w-full text-3xl font-bold text-white bg-blue-500 overflow-hidden">
                <h1 class="text-center p-4">Student dashboard</h1>
            </div>

            <div class="text-gray-700">
                <p>Welcome {{session('student')->username}}</p>
                <p>Email : {{session('student')->email}}</p>
                <p>Created At : {{session('student')->created_at}}</p>
            </div>

            <div class="flex items-center justify-items-end">
                <a href="{{url('/edit/'.session('student')->id)}}">Edit</a>
                <a href="{{url('/change-password/'.session('student')->id)}}">Change Password</a>
            </div>
        </div>

    </x-slot>
</x-layout>