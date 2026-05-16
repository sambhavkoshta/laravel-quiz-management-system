<x-layout>
    <x-slot name="main">
        <div class="flex flex-col items-center justify-center min-h-screen p-4">
            <div class=" w-full max-w-md bg-white flex flex-col items-center p-8 rounded-2xl shadow-lg">
                <h1 class="text-3xl font-bold text-gray-700 mb-4">Change Password</h1>
                <form action="{{url('/change-password/'.$student->id)}}" method="post" class="space-y-4 w-full m-4">
                    @csrf
                    <input type="password" name="currpass" placeholder="Enter Current Password" class="w-full border border-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-4 py-2 rounded-xl"><br>
                    <input type="password" name="newpass" placeholder="Enter New Password" class="w-full border border-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-4 py-2 rounded-xl"><br>
                    <button type="submit" class="text-center w-full bg-blue-700 text-white py-2 rounded-xl">Change Password</button>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>