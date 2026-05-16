<nav class="w-full bg-">
    <div class="flex items-center justify-between px-4 py-2">
        <div class="text-2xl font-bold text-gray-700">
            <a href="{{url('/dashboard')}}"><span class="text-3xl text-blue-700">Quiz</span> System</a>
        </div>

        <ul class="flex space-x-6 text-xl font-normal">
            <li><a href="/" class="hover:text-blue-700">Home</a></li>

            @if(session('student'))
            <li><a href="{{url('/dashboard')}}" class="hover:text-blue-700">Dashboard</a></li>
            <li><a href="/courses" class="hover:text-blue-700">My Courses</a></li>

            <li>
                <span>👤 {{session('student')->username}}</span>
                <div>
                    <a href="{{url('/profile/'.session('student')->id)}}" class="hover:text-blue-700">My Profile</a>
                    <form action="{{url('/logout')}}" method="get">
                        @csrf
                        <button type="submit" class="hover:text-blue-700">Log Out</button>
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