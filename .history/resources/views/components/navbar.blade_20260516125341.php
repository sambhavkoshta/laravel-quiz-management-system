<nav class="w-full bg-gray-800 p-4 text-white">
    <div class="max-w-6xl mx-auto flex items-center justify-between relative">
        <div class="text-xl font-bold">Quiz System</div>

        <button id="menu-btn" class="block md:hidden p-2 hover:bg-gray-700 rounded-lg">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <ul id="menu-items" class="absolute left-0 right-0 top-full mt-2 bg-gray-800 p-4 space-y-3 rounded-lg shadow-xl hidden md:static md:mt-0 md:p-0 md:flex md:space-y-0 md:space-x-6 md:block">
            <li><a href="#" class="block py-1 hover:text-blue-400">Home</a></li>
            <li><a href="#" class="block py-1 hover:text-blue-400">Dashboard</a></li>
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