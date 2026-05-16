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
            <div class=" w-full *:text-3xl font-bold text-gray-700 bg-blue-500">
                <h1 class="bg-blue-500">Student dashboard</h1>
            </div>

            <div>
                <p>Welcome {{session('student')->username}}</p>
                <p>Email : {{session('student')->email}}</p>
                <p>Created At : {{session('student')->created_at}}</p>
            </div>

            <div>
                <a href="{{url('/edit/'.session('student')->id)}}">Edit</a>
                <a href="{{url('/change-password/'.session('student')->id)}}">Change Password</a>
            </div>
        </div>

    </x-slot>
</x-layout>