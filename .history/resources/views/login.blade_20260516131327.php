<x-layout>
    <x-slot name="main">
        @if (session('logoutSuccess'))
        <div>
            {{ session('logoutSuccess') }}
        </div>
        @endif
        <div class="flex flex-col items-center justify-center min-h-screen max">
            <div class="max-w-md bg-white flex flex-col items-center p-4">
                <h1>Login</h1>
                <form action="{{url('/login')}}" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Enter Username"><br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>