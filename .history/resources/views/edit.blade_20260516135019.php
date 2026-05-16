<h1>Edit Profile</h1>
<form action="{{url('/edit/'.$student->id)}}" method="post">
    @csrf
    <input type="text" name="username" value="{{old('username',$student->username)}}"><br><br>
    <input type="email" name="email" value="{{old('email',$student->email)}}"><br><br>
    <button type="submit">Update</button>
</form>

<x-layout>
    <x-slot name="main">
        @if (session('logoutSuccess'))
        <div>
            {{ session('logoutSuccess') }}
        </div>
        @endif
        <div class="flex flex-col items-center justify-center min-h-screen p-4">
            <div class=" w-full max-w-md bg-white flex flex-col items-center p-8 rounded-2xl shadow-lg">
                <h1 class="text-3xl font-bold text-gray-700 mb-4">Login</h1>
                <form action="{{url('/edit/'.$student->id)}}" method="post" class="space-y-4 w-full m-4">
                    @csrf
                    <input type="text" name="username" placeholder="Enter Username" value="{{old('username',$student->username)}}" class=" w-full border border-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-4 py-2 rounded-xl"><br>
                    <input type="email" name="email" placeholder="Enter Email" value="{{old('email',$student->email)}}" class=" w-full border border-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-4 py-2 rounded-xl"><br>
                    <button type="submit" class="text-center w-full bg-blue-700 text-white py-2 rounded-xl">Update Details</button>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>