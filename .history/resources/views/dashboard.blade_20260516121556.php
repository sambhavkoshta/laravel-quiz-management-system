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

        <div class=" max-w-7xl mx-auto flex flex-col items-center text-left justify-center bg-white m-10 max-w-md p-20 rounded-2xl">
            <h1>Student dashboard</h1>
            <p>Welcome {{session('student')->username}}</p>
            <p>Email : {{session('student')->email}}</p>
            <p>Created At : {{session('student')->created_at}}</p>

            <a href="{{url('/edit/'.session('student')->id)}}">Edit</a>

            <a href="{{url('/change-password/'.session('student')->id)}}">Change Password</a>
        </div>

    </x-slot>
</x-layout>