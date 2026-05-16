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
                    <a href="{{/profile}}">My Profile</a>
                    <a href="/settings">Settings</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
                </div>
            </li>
            @else
            <li><a href="/login">Sign In</a></li>
            <li><a href="/register">Register</a></li>
            @endif
        </ul>
    </div>
</nav>