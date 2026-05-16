<nav class="w-full bg-white shadow">
    <div class="flex items-center justify-between px-4 py-2">
        <div class="text-2xl font-bold text-gray-700">
            <a href="{{url('/dashboard')}}"><span class="text-3xl text-blue-700">Quiz</span> System</a>
        </div>

        <ul class="flex space-x-4 text-xl font-normal">
            @if(session('student'))
            <li><a href="{{url('/dashboard')}}" class="hover:text-blue-700">Dashboard</a></li>
            <li><a href="{{url('/student/categories')}}" class="hover:text-blue-700">Categories</a></li>

            <l>
                <div class="flex space-x-4">
                    <a href="{{url('/profile/'.session('student')->id)}}" class="hover:text-blue-700">My Profile</a>
                    <form action="{{url('/logout')}}" method="get">
                        @csrf
                        <button type="submit" class="hover:text-blue-700 ">Log Out</button>
                    </form>
                </div>
            </l<!-- 1. Initialize menu state (open = false) using x-data -->
<nav x-data="{ open: false }" class="w-full bg-white shadow relative">
    <div class="mx-auto max-w-7xl px-4 py-3">
        <div class="flex items-center justify-between">
            
            <!-- Brand Logo -->
            <div class="text-2xl font-bold text-gray-700 flex-shrink-0">
                <a href="{{ url('/dashboard') }}"><span class="text-3xl text-blue-700">Quiz</span> System</a>
            </div>

            <!-- 2. MOBILE HAMBURGER BUTTON -->
            <!-- Toggles the 'open' variable state back and forth on every user click -->
            <button @click="open = !open" 
                    type="button"
                    class="block md:hidden p-2 rounded-lg text-gray-500 hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" 
                    aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Dynamic SVG switch based on state -->
                <!-- Hamburger Icon when closed -->
                <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- 'X' Cancel Icon when open -->
                <svg x-show="open" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- 3. DESKTOP NAVIGATION LINKS MATRIX -->
            <!-- Permanently visible on desktops (md:flex), hidden by default on mobile dimensions -->
            <ul class="hidden md:flex md:items-center md:space-x-6 text-xl font-normal text-gray-600">
                @if(session('student'))
                    <li><a href="{{ url('/dashboard') }}" class="hover:text-blue-700 transition">Dashboard</a></li>
                    <li><a href="{{ url('/student/categories') }}" class="hover:text-blue-700 transition">Categories</a></li>
                    <li><a href="{{ url('/profile/'.session('student')->id) }}" class="hover:text-blue-700 transition">My Profile</a></li>
                    <li>
                        <form action="{{ url('/logout') }}" method="get" class="inline m-0">
                            @csrf
                            <button type="submit" class="hover:text-blue-700 transition font-normal">Log Out</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ url('/login') }}" class="hover:text-blue-700 transition">Sign In</a></li>
                    <li><a href="{{ url('/register') }}" class="hover:text-blue-700 transition">Register</a></li>
                @endif
            </ul>

        </div>
    </div>

    <!-- 4. MOBILE DROPDOWN DRAWER -->
    <!-- Listens directly to state loops; smoothly expands down using x-collapse animation properties -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         x-cloak
         class="absolute top-full left-0 w-full bg-white border-b border-gray-200 shadow-xl z-50 md:hidden px-4 py-3">
        
        <ul class="flex flex-col space-y-3 text-xl font-normal text-gray-600">
            @if(session('student'))
                <li><a href="{{ url('/dashboard') }}" @click="open = false" class="block py-1.5 border-b border-gray-50 hover:text-blue-700">Dashboard</a></li>
                <li><a href="{{ url('/student/categories') }}" @click="open = false" class="block py-1.5 border-b border-gray-50 hover:text-blue-700">Categories</a></li>
                <li><a href="{{ url('/profile/'.session('student')->id) }}" @click="open = false" class="block py-1.5 border-b border-gray-50 hover:text-blue-700">My Profile</a></li>
                <li>
                    <form action="{{ url('/logout') }}" method="get" class="m-0">
                        @csrf
                        <button type="submit" class="block w-full text-left py-1.5 text-red-600 hover:bg-gray-50 font-normal">Log Out</button>
                    </form>
                </li>
            @else
                <li><a href="{{ url('/login') }}" @click="open = false" class="block py-1.5 border-b border-gray-50 hover:text-blue-700">Sign In</a></li>
                <li><a href="{{ url('/register') }}" @click="open = false" class="block py-1.5 hover:text-blue-700">Register</a></li>
            @endif
        </ul>
    </div>
</nav>
i>
            @else
            <li><a href="{{url('/login')}}" class="hover:text-blue-700">Sign In</a></li>
            <li><a href="{{url('/register')}}" class="hover:text-blue-700">Register</a></li>
            @endif
        </ul>
    </div>
</nav>