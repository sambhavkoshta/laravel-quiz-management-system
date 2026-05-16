<nav class="w-full bg-white shadow">
    <div class="flex items-center justify-between px-4 py-2">
        <div class="text-2xl font-bold text-gray-700">
            <a href="{{url('/dashboard')}}"><span class="text-3xl text-blue-700">Quiz</span> System</a>
        </div>

        <button id="menu-btn" class="block md:hidden p-2 hover:bg-gray-700 rounded-lg">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <ul class="flex space-x-4 text-xl font-normal absolute left-0 right-0 top-full" id="menu-items">
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

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu-items');
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>