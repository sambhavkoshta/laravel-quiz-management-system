<nav class="bg-white/80 backdrop-blur-md shadow-md rounded-3xl m-4 border border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-3">
        <div class="flex items-center justify-between">

            <!-- Logo Section -->
            <div class="text-xl font-black tracking-tight text-gray-800">
                <a href="{{url('/dashboard')}}" class="flex items-center gap-1.5 group">
                    <span class="bg-sky-500 text-white px-3 py-1 rounded-xl shadow-md shadow-sky-200 group-hover:bg-sky-600 transition">
                        Quiz
                    </span>
                    <span class="text-gray-700">System</span>
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="menuBtn" class="md:hidden p-2 rounded-xl text-gray-600 hover:bg-gray-100 active:scale-95 transition-all focus:outline-none" aria-label="Toggle Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="menuIcon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Desktop Navigation Menu -->
            <ul class="hidden md:flex items-center space-x-1 text-sm font-semibold text-gray-600">
                @if(session('admin'))
                <li><a href="{{url('/admin-dashboard')}}" class="px-4 py-2 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Dashboard</a></li>
                <li><a href="{{url('/categories')}}" class="px-4 py-2 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Categories</a></li>
                <li><a href="{{url('/quizzes')}}" class="px-4 py-2 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Quizzes</a></li>
                <li class="pl-2">
                    <form action="{{url('/admin-logout')}}" method="get" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2 rounded-xl bg-red-50 text-red-600 hover:bg-red-100 transition font-bold">Logout</button>
                    </form>
                </li>

                @elseif(session('student'))
                <li><a href="{{url('/dashboard')}}" class="px-4 py-2 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Dashboard</a></li>
                <li><a href="{{url('/student/categories')}}" class="px-4 py-2 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Categories</a></li>
                <li class="pl-2">
                    <form action="{{url('/logout')}}" method="get" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2 rounded-xl bg-red-50 text-red-600 hover:bg-red-100 transition font-bold">Logout</button>
                    </form>
                </li>

                @else
                <li><a href="{{url('/login')}}" class="px-4 py-2 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Sign In</a></li>
                <li><a href="{{url('/register')}}" class="ml-2 px-4 py-2 rounded-xl bg-sky-500 text-white hover:bg-sky-600 shadow-sm shadow-sky-100 transition">Register</a></li>
                @endif
            </ul>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobileMenu" class="hidden md:hidden border-t border-gray-100 mx-6 pb-4 pt-2">
        <ul class="flex flex-col space-y-1 text-sm font-semibold text-gray-600">
            @if(session('admin'))
            <li><a href="{{url('/admin-dashboard')}}" class="block px-4 py-2.5 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Dashboard</a></li>
            <li><a href="{{url('/categories')}}" class="block px-4 py-2.5 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Categories</a></li>
            <li><a href="{{url('/quizzes')}}" class="block px-4 py-2.5 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Quizzes</a></li>
            <li class="pt-2">
                <form action="{{url('/admin-logout')}}" method="get">
                    @csrf
                    <button type="submit" class="w-full text-center px-4 py-2.5 rounded-xl bg-red-50 text-red-600 hover:bg-red-100 transition font-bold">Logout</button>
                </form>
            </li>

            @elseif(session('student'))
            <li><a href="{{url('/dashboard')}}" class="block px-4 py-2.5 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Dashboard</a></li>
            <li><a href="{{url('/student/categories')}}" class="block px-4 py-2.5 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Categories</a></li>
            <li class="pt-2">
                <form action="{{url('/logout')}}" method="get">
                    @csrf
                    <button type="submit" class="w-full text-center px-4 py-2.5 rounded-xl bg-red-50 text-red-600 hover:bg-red-100 transition font-bold">Logout</button>
                </form>
            </li>

            @else
            <li><a href="{{url('/login')}}" class="block px-4 py-2.5 rounded-xl hover:bg-gray-50 hover:text-sky-600 transition">Sign In</a></li>
            <li class="pt-1"><a href="{{url('/register')}}" class="block text-center px-4 py-2.5 rounded-xl bg-sky-500 text-white hover:bg-sky-600 transition shadow-sm">Register</a></li>
            @endif
        </ul>
    </div>
</nav>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');

    menuBtn.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.toggle('hidden');

        // Dynamically toggle hamburger icon to an "X" close icon
        if (!isHidden) {
            menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>`;
        } else {
            menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>`;
        }
    });
</script>