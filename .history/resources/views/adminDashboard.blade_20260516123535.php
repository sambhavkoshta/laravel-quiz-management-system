<x-layout>
    <x-slot name="main">
        <!-- Sidebar Toggle Checkbox for CSS-Only Mobile Toggle -->
        <input type="checkbox" id="sidebar-toggle" class="peer hidden" />

        <div class="min-h-[calc(100vh-4rem)] bg-gray-900 text-gray-100 flex relative overflow-x-hidden">

            <!-- 1. BACKDROP OVERLAY (Mobile Only) -->
            <label for="sidebar-toggle"
                class="fixed inset-0 bg-black/50 z-30 transition-opacity opacity-0 pointer-events-none peer-checked:opacity-100 peer-checked:pointer-events-auto lg:hidden">
            </label>

            <!-- 2. SIDEBAR COMPONENT -->
            <!-- Mobile: Left-hidden off-screen canvas. Desktop (lg:): Static 64-width fixed menu -->
            <aside class="fixed top-16 bottom-0 left-0 w-64 bg-gray-800 border-r border-gray-700 z-40 transition-transform -translate-x-full 
                          peer-checked:translate-x-0 
                          lg:static lg:translate-x-0 lg:flex lg:flex-col lg:h-[calc(100vh-4rem)] flex-shrink-0">

                <!-- Navigation Link Items Wrapper -->
                <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">

                    <!-- Dashboard Link Link -->
                    <a href="{{ url('/admin-dashboard') }}"
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-sm transition duration-150
                              {{ Request::is('admin-dashboard') ? 'bg-blue-700 text-white shadow-md' : 'text-gray-400 hover:bg-gray-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"></path>
                        </svg>
                        Dashboard
                    </a>

                    <!-- Category Link (Active state triggered across all nested category sub-routes) -->
                    <a href="{{ url('/categories') }}"
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-sm transition duration-150
                              {{ Request::is('categories*') ? 'bg-blue-700 text-white shadow-md' : 'text-gray-400 hover:bg-gray-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Categories Management
                    </a>

                    <!-- Quizzes Management Link (Placeholder for routing expansion) -->
                    <a href="{{ url('/quizzes') }}"
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-sm transition duration-150 text-gray-400 hover:bg-gray-700/50 hover:text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                        Quiz Catalog
                    </a>

                </nav>

                <!-- Footer Section Inside Sidebar -->
                <div class="p-4 border-t border-gray-700 bg-gray-800/50">
                    <a href="{{ url('/admin-logout') }}" class="flex items-center gap-3 px-4 py-2 text-sm text-red-400 font-medium hover:text-red-300 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Term Logout
                    </a>
                </div>
            </aside>

            <!-- 3. MAIN WORKSPACE BLOCK -->
            <div class="flex-1 flex flex-col min-w-0">

                <!-- Mobile Only Sticky Floating Action Bar Header -->
                <header class="flex items-center bg-gray-800 px-4 py-3 border-b border-gray-700 lg:hidden shadow-sm">
                    <label for="sidebar-toggle" class="p-2 rounded-lg text-gray-400 hover:bg-gray-700 focus:outline-none cursor-pointer">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                    <span class="ml-4 font-semibold text-white text-sm">Category Console</span>
                </header>

                <!-- Content Area Wrapper Injection Context -->
                <main class="flex-1 p-4 sm:p-6 lg:p-8 overflow-y-auto">

                    <!-- INSERT YOUR CATEGORIES MANAGEMENT CODE HERE (From previous steps) -->
                    <div class="max-w-4xl mx-auto">
                        <h1 class="text-2xl font-bold text-white mb-2">Category Workspace</h1>
                        <p class="text-sm text-gray-400">Manage definitions and active routes dynamically.</p>
                    </div>

                </main>
            </div>

        </div>
    </x-slot>
</x-layout>