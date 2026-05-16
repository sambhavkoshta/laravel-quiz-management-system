<nav class="w-full bg-white shadow relative">
    <div class="mx-auto max-w-7xl px-4 py-3">
        <div class="flex items-center justify-between">
            
            <!-- Brand Logo -->
            <div class="text-2xl font-bold text-gray-700 flex-shrink-0">
                <a href="{{ url('/dashboard') }}"><span class="text-3xl text-blue-700">Quiz</span> System</a>
            </div>

            <!-- 1. MOBILE HAMBURGER TRIGGER BUTTON (With ID) -->
            <button id="mobile-menu-btn" 
                    type="button"
                    class="block md:hidden p-2 rounded-lg text-gray-500 hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                <!-- Hamburger Icon -->
                <svg id="icon-hamburger" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- 'X' Close Icon (Hidden by default using 'hidden') -->
                <svg id="icon-close" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- 2. DESKTOP NAVIGATION MATRIX (md:flex) -->
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

    <!-- 3. MOBILE DROPDOWN DRAWER CONTAINER (With ID and hidden state by default) -->
    <div id="mobile-dropdown" class="absolute top-full left-0 w-full bg-white border-b border-gray-200 shadow-xl z-50 hidden md:hidden px-4 py-3">
        <ul class="flex flex-col space-y-3 text-xl font-normal text-gray-600">
            @if(session('student'))
                <li><a href="{{ url('/dashboard') }}" class="block py-1.5 border-b border-gray-50 hover:text-blue-700">Dashboard</a></li>
                <li><a href="{{ url('/student/categories') }}" class="block py-1.5 border-b border-gray-50 hover:text-blue-700">Categories</a></li>
                <li><a href="{{ url('/profile/'.session('student')->id) }}" class="block py-1.5 border-b border-gray-50 hover:text-blue-700">My Profile</a></li>
                <li>
                    <form action="{{ url('/logout') }}" method="get" class="m-0">
                        @csrf
                        <button type="submit" class="block w-full text-left py-1.5 text-red-600 hover:bg-gray-50 font-normal">Log Out</button>
                    </form>
                </li>
            @else
                <li><a href="{{ url('/login') }}" class="block py-1.5 border-b border-gray-50 hover:text-blue-700">Sign In</a></li>
                <li><a href="{{ url('/register') }}" class="block py-1.5 hover:text-blue-700">Register</a></li>
            @endif
        </ul>
    </div>
</nav>

<!-- 4. NATIVE JAVASCRIPT LOGIC ENGINE -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Fetch elements out of the DOM tree map
        const menuBtn = document.getElementById('mobile-menu-btn');
        const dropdownMenu = document.getElementById('mobile-dropdown');
        const hamburgerIcon = document.getElementById('icon-hamburger');
        const closeIcon = document.getElementById('icon-close');

        // Add standard event listener action hook
        menuBtn.addEventListener('click', () => {
            // Toggle the visibility layout class on the container drawer
            dropdownMenu.classList.toggle('hidden');

            // Swap out structural SVG statuses natively
            if (dropdownMenu.classList.contains('hidden')) {
                hamburgerIcon.classList.replace('hidden', 'block');
                closeIcon.classList.replace('block', 'hidden');
            } else {
                hamburgerIcon.classList.replace('block', 'hidden');
                closeIcon.classList.replace('hidden', 'block');
            }
        });
    });
</script>
