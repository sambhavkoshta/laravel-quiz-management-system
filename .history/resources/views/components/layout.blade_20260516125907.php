<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <nav class="w-full bg-white shadow">
        <div class="flex items-center justify-between px-4 py-2">
            <div class="text-2xl font-bold text-gray-700">
                <a href="{{url('/dashboard')}}"><span class="text-3xl text-blue-700">Quiz</span> System</a>
            </div>

            <ul class="flex space-x-4 text-xl font-normal">
                @if(session('student'))
                <li><a href="{{url('/dashboard')}}" class="hover:text-blue-700">Dashboard</a></li>
                <li><a href="{{url('/student/categories')}}" class="hover:text-blue-700">Categories</a></li>

                <li>
                    <div class="flex space-x-4">
                        <a href="{{url('/profile/'.session('student')->id)}}" class="hover:text-blue-700">My Profile</a>
                        <form action="{{url('/logout')}}" method="get">
                            @csrf
                            <button type="submit" class="hover:text-blue-700 ">Log Out</button>
                        </form>
                    </div>
                </li>
                @else
                <li><a href="{{url('/login')}}" class="hover:text-blue-700">Sign In</a></li>
                <li><a href="{{url('/register')}}" class="hover:text-blue-700">Register</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <title>Quiz System</title>
</head>

<body class="bg-gray-200 w-full min-h-screen">
    <x-navbar></x-navbar>
    <div class="w-full">{{$main}}</div>
</body>

</html>