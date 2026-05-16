<nav>
    <div>
        <a href="{{url('/dashboard')}}">⚡ StudentPortal</a>

        <ul>
            <li><a href="/">Home</a></li>

            @if(session('student'))
            <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
            <li><a href="/courses">My Courses</a></li>

            <li>
                <span>👤 {{session('student')->username}}</span>
                <div>
                    <a href="{{url('/profile/'.Session::get('))}}">My Profile</a>
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