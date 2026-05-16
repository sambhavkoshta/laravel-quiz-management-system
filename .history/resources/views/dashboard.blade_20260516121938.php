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

        <div class="mx-auto grid grid-cols-2">
            <
            <div>
                <a href="{{url('/edit/'.session('student')->id)}}">Edit</a>
    
                <a href="{{url('/change-password/'.session('student')->id)}}">Change Password</a>
            </div>
        </div>

    </x-slot>
</x-layout>