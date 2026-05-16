<x-layout>
    <x-slot name="main">
        @if (session('logoutSuccess'))
        <div>
            {{ session('logoutSuccess') }}
        </div>
        @endif
        <div class="flex flex-col items-center justify-center min-h-screen p-4">
            <div class=" w-full max-w-md bg-white flex flex-col items-center p-4">
                <h1 class="text-3xl font-bold text-gray-700 mb-4">Login</h1>
                <form action="{{url('/login')}}" method="post">
                    @csrf
                    <input type="text" name="username" placeholder="Enter Username" class="w-full border px-4 py-2 rounded-xl"><br>
                    <input type="password" name="password" placeholder="Password" class="w-full border px-4 py-2 rounded-xl"><br>
                    <button type="submit" class="text-center w-full bg-blu">Login</button>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>