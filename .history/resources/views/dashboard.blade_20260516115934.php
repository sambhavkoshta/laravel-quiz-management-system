<x-layout>
    <x-slot name="main">

        <h1>Student dashboard</h1>
        
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
        
        
        
        <p>Welcome {{session('student')->username}}</p>
        <p>Email : {{session('student')->email}}</p>
        <p>Created At : {{session('student')->created_at}}</p>
        
        <a href="{{url('/edit/'.session('student')->id)}}">Edit</a>
        
        <a href="{{url('/change-password/'.session('student')->id)}}">Change Password</a>
        
        <a href="{{url('/logout')}}">Logout</a>
    </x-slot>
</x-layout>