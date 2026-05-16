<nav class="w-full bg-white shadow">
    <!-- Main container wrapper -->
    <div class="mx-auto max-w-7xl px-4">
        <div class="flex h-16 items-center justify-between">

            <!-- Brand Logo -->
            <div class="text-2xl font-bold text-gray-700 flex-shrink-0">
                <a href="{{url('/dashboard')}}">
                    <span class="text-3xl text-blue-700">Quiz</span> System
                </a>
            </div>

            <!-- CSS Toggle Element (Hidden checkbox for JS-free mobile menu toggle) -->
            <input type="checkbox" id="menu-toggle" class="peer hidden" />

            <!-- Hamburger Icon (Visible on mobile only) -->
            <label for="menu-toggle" class="block cursor-pointer p-2 md:hidden text-gray-700 hover:text-blue-700 focus:outline-none">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path class="peer-checked:hidden" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
                </svg>
            </label>

            <!-- Navigation Links -->
            <!-- Mobile: Absolute positioned, hidden by default, stack vertically. Desktop (md:): Flex row, static -->
            <ul class="absolute left-0 top-16 z-50 hidden w-full flex-col bg-white px-4 py-2 shadow-md text-xl font-normal text-gray-700 transition-all duration-300 space-y-3
                       peer-checked:flex 
                       md:static md:top-0 md:z-auto md:flex md:w-auto md:flex-row md:space-y-0 md:space-x-6 md:p-0 md:shadow-none">

                <li><a href="/" class="block py-1 hover:text-blue-700">Home</a></li>

                @if(session('student'))
                <li><a href="{{url('/dashboard')}}" class="block py-1 hover:text-blue-700">Dashboard</a></li>
                <li><a href="{{url('/student/categories')}}" class="block py-1 hover:text-blue-700">Categories</a></li>
                <li><a href="{{url('/profile/'.session('student')->id)}}" class="block py-1 hover:text-blue-700">My Profile</a></li>
                <li>
                    <form action="{{url('/logout')}}" method="get" class="m-0">
                        @csrf
                        <button type="submit" class="block w-full text-left py-1 hover:text-blue-700">Log Out</button>
                    </form>
                </li>
                @else
                <li><a href="{{url('/login')}}" class="block py-1 hover:text-blue-700">Sign In</a></li>
                <li><a href="{{url('/register')}}" class="block py-1 hover:text-blue-700">Register</a></li>
                @endif
            </ul>

        </div>
    </div>
</nav>