<nav>
    <div class="flex items-center justify-between px-4 py-2">
        <div class="text-3xl font-bold text-gray-700">
            <a href="{{url('/dashboard')}}">Quiz System</a>
        </div>

        <ul class="flex space-x-4">
            <li><a href="/">Home</a></li>

            @if(session('student'))
            <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li><a href="/courses">My Courses</a></li>

            <li>
                <span>👤 {{session('student')->username}}</span>
                <div>
                    <a href="{{url('/profile/'.session('student')->id)}}">My Profile</a>
                    <form action="{{url('/logout')}}" method="get">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
                </div>
            </li>
            @else
            <li><a href="{{url('/login')}}">Sign In</a></li>
            <li><a href="{{url('/register')}}">Register</a></li>
            @endif
        </ul>
    </div>
</nav>