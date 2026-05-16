<nav class="w-full bg-white shadow">
    <div class="flex items-center justify-between px-4 py-3">
        <div class="text-2xl font-bold text-gray-700">
            <a href="{{url('/dashboard')}}">
                <span class="text-3xl text-blue-700">
                    Quiz
                </span>
                System
            </a>
        </div>

        <button id="menuBtn"class="md:hidden text-3xl">
            ☰
        </button>

        <ul class="hidden md:flex space-x-4 text-xl font-normal">
            @if(session('student'))
            <li>
                <a href="{{url('/dashboard')}}"class="hover:text-blue-700">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{url('/student/categories')}}"class="hover:text-blue-700">
                    Categories
                </a>
            </li>
            <li>
                <div class="flex space-x-4">
                    <form action="{{url('/logout')}}" method="get">
                        @csrf
                        <button type="submit"class="hover:text-blue-700">
                            Log Out
                        </button>
                    </form>
                </div>
            </li>
            @else
            <li>
                <a href="{{url('/login')}}"class="hover:text-blue-700">
                    Sign In
                </a>
            </li>
            <li>
                <a href="{{url('/register')}}"class="hover:text-blue-700">
                    Register
                </a>
            </li>
            @endif
        </ul>
    </div>
    <div id="mobileMenu"class="hidden md:hidden px-4 pb-4">
        <ul class="flex flex-col space-y-4 text-lg">
            @if(session('student')||)
            <li>
                <a href="{{url('/dashboard')}}" class="hover:text-blue-700">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{url('/student/categories')}}"
                    class="hover:text-blue-700">
                    Categories
                </a>
            </li>
            <li>
            </li>
            <li>
                <form action="{{url('/logout')}}"
                    method="get">
                    @csrf
                    <button type="submit"class="hover:text-blue-700">
                        Log Out
                    </button>
                </form>
            </li>
            @else
            <li>
                <a href="{{url('/login')}}"class="hover:text-blue-700">
                    Sign In
                </a>
            </li>
            <li>
                <a href="{{url('/register')}}"class="hover:text-blue-700">
                    Register
                </a>
            </li>
            @endif
        </ul>
    </div>

</nav>

<script>
    let menuBtn =document.getElementById('menuBtn');
    let mobileMenu =document.getElementById('mobileMenu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>