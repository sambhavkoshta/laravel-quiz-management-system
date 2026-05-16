<nav class="navbar">
    <div class="nav-container">
        <!-- Logo / Brand Link -->
        <a href="/dashboard" class="nav-logo">
            ⚡ StudentPortal
        </a>

        <!-- Main Navigation Links -->
        <ul class="nav-links">
            <!-- Visible to anyone -->
            <li><a href="/" class="nav-item">Home</a></li>

            <!-- Contextual Links based on Authentication State -->
            @if(Auth::check())
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/courses" class="nav-item">My Courses</a></li>

            <!-- Profile Dropdown (Simulated) -->
            <li class="nav-dropdown">
                <span class="user-badge">
                    👤 {{ Auth::user()->username ?? 'Student' }}
                </span>
                <div class="dropdown-menu">
                    <a href="/profile">My Profile</a>
                    <a href="/settings">Settings</a>
                    <hr>
                    <!-- Safe Logout Link -->
                    <form action="/logout" method="POST" style="margin: 0;">
                        @csrf
                        <button type="submit" class="logout-btn">Log Out</button>
                    </form>
                </div>
            </li>
            @else
            <!-- Guest Only Links -->
            <li><a href="/login" class="nav-item login-link">Sign In</a></li>
            <li><a href="/register" class="nav-item register-btn">Register</a></li>
            @endif
        </ul>
    </div>
</nav>