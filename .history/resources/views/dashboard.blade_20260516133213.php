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

        <div class=" max-w-md mx-auto p-4 flex flex-col items-center text-left justify-center bg-white m-10 rounded-2xl">
            <h1 class="text-3xl">Student dashboard</h1>
            <p>Welcome {{session('student')->username}}</p>
            <p>Email : {{session('student')->email}}</p>
            <p>Created At : {{session('student')->created_at}}</p>

            <a href="{{url('/edit/'.session('student')->id)}}">Edit</a>

            <a href="{{url('/change-password/'.session('student')->id)}}">Change Password</a>
        </div>

    </x-slot>
</x-layout>