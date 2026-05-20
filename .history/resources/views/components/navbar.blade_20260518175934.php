<nav class="w-full bg-white shadow-lg rounded-full p-2">
    <div class="flex items-center justify-between px-4 py-3">
        <div class="text-2xl font-bold text-gray-700">
            <a href="{{url('/dashboard')}}">
                <span class="text-3xl text-blue-700">
                    Quiz
                </span>
                System
            </a>
        </div>

        <button id="menuBtn" class="md:hidden text-3xl">
            ☰
        </button>

        <ul class="hidden md:flex space-x-4 text-xl font-normal">
            @if(session('admin'))
            <li>
                <a href="{{url('/admin-dashboard')}}">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{url('/categories')}}">
                    Categories
                </a>
            </li>
            <li>
                <a href="{{url('/quizzes')}}">
                    Quizzes
                </a>
            </li>
            <li>
                <form action="{{url('/admin-logout')}}"
                    method="get">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>
            </li>
            @elseif(session('student'))
            <li>
                <a href="{{url('/dashboard')}}">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{url('/student/categories')}}">
                    Categories
                </a>
            </li>
            <li>
                <form action="{{url('/logout')}}"
                    method="get">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>
            </li>
            @else
            <li>
                <a href="{{url('/login')}}">
                    Sign In
                </a>
            </li>
            <li>
                <a href="{{url('/register')}}">
                    Register
                </a>
            </li>
            @endif
        </ul>
    </div>
    <div id="mobileMenu" class="hidden md:hidden px-4 pb-4">
        <ul class="flex flex-col space-y-4 text-lg">
            @if(session('admin'))
            <li>
                <a href="{{url('/admin-dashboard')}}">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{url('/categories')}}">
                    Categories
                </a>
            </li>
            <li>
                <a href="{{url('/quizzes')}}">
                    Quizzes
                </a>
            </li>
            <li>
                <form action="{{url('/admin-logout')}}"
                    method="get">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>
            </li>
            @elseif(session('student'))
            <li>
                <a href="{{url('/dashboard')}}">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{url('/student/categories')}}">
                    Categories
                </a>
            </li>
            <li>
                <form action="{{url('/logout')}}"
                    method="get">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>
            </li>
            @else
            <li>
                <a href="{{url('/login')}}">
                    Sign In
                </a>
            </li>
            <li>
                <a href="{{url('/register')}}">
                    Register
                </a>
            </li>
            @endif
        </ul>
    </div>

</nav>

<script>
    let menuBtn = document.getElementById('menuBtn');
    let mobileMenu = document.getElementById('mobileMenu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>