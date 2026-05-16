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
            <aside class="fixed top-16 bottom-0 left-0 w-64 bg-gray-800 border-r border-gray-700 z-40 transition-transform -translate-x-full 
                          peer-checked:translate-x-0 
                          lg:static lg:translate-x-0 lg:flex lg:flex-col lg:h-[calc(100vh-4rem)] flex-shrink-0">

                <!-- Navigation Link Items Wrapper -->
                <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">

                    <!-- Dashboard Link -->
                    <a href="{{ url('/admin-dashboard') }}"
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-sm transition duration-150
                              {{ Request::is('admin-dashboard') || Request::is('admin/dashboard') ? 'bg-blue-700 text-white shadow-md' : 'text-gray-400 hover:bg-gray-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"></path>
                        </svg>
                        Dashboard
                    </a>

                    <!-- Category Link -->
                    <a href="{{ url('/categories') }}"
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-sm transition duration-150
                              {{ Request::is('categories*') ? 'bg-blue-700 text-white shadow-md' : 'text-gray-400 hover:bg-gray-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Categories Management
                    </a>

                    <!-- Quiz Catalog Link (Highlighted Blue because of wildcard match) -->
                    <a href="{{ url('/quizzes') }}"
                        class="flex items-center gap-3 px-4 py-2.5 rounded-xl font-medium text-sm transition duration-150
                              {{ Request::is('quizzes*') || Request::is('mcqs*') ? 'bg-blue-700 text-white shadow-md' : 'text-gray-400 hover:bg-gray-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                        Quiz Catalog
                    </a>

                </nav>

                <!-- Sidebar Footer Section -->
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
                    <span class="ml-4 font-semibold text-white text-sm">Quizzes Console</span>
                </header>

                <!-- Dynamic Content Area -->
                <main class="flex-1 p-4 sm:p-6 lg:p-8 overflow-y-auto space-y-6">
                    <div class="max-w-5xl mx-auto space-y-6">

                        <!-- Global Validation Errors & Success Notifications -->
                        @if ($errors->any() || session('success'))
                        <div class="w-full">
                            @if (session('success'))
                            <div class="rounded-md bg-emerald-950/50 p-4 text-sm text-emerald-400 shadow-sm border border-emerald-800/60">
                                {{ session('success') }}
                            </div>
                            @endif
                            @if ($errors->any())
                            <div class="rounded-md bg-red-950/50 p-4 text-sm text-red-400 shadow-sm border border-red-800/60">
                                <ul class="list-disc pl-5 space-y-1">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        @endif

                        <!-- Section 1: Create Quiz Card Configurer -->
                        <div class="bg-gray-800 rounded-2xl border border-gray-700 p-6 shadow-lg">
                            <h2 class="text-lg font-bold text-white mb-4">Create New Quiz</h2>
                            <form action="{{ url('/quizzes/add') }}" method="post" class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
                                @csrf

                                <!-- Text Input -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-400 mb-2">Quiz Name</label>
                                    <input type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Enter Quiz Name"
                                        required
                                        class="w-full rounded-md border border-gray-600 bg-gray-700 px-3 py-2 text-white placeholder-gray-400 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm">
                                </div>

                                <!-- Selection Element Dropdown -->
                                <div>
                                    <label for="category_id" class="block text-sm font-medium text-gray-400 mb-2">Assigned Category</label>
                                    <select id="category_id"
                                        name="category_id"
                                        required
                                        class="w-full rounded-md border border-gray-600 bg-gray-700 px-3 py-2 text-white shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm">
                                        <option value="" disabled selected>Select a Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Submission Trigger -->
                                <button type="submit"
                                    class="w-full inline-flex justify-center items-center rounded-md bg-blue-700 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150">
                                    Create Quiz
                                </button>
                            </form>
                        </div>

                        <!-- Section 2: Quizzes Overview Grid Table Matrix -->
                        <div class="bg-gray-800 rounded-2xl border border-gray-700 shadow-lg overflow-hidden">
                            <div class="px-6 py-4 border-b border-gray-700 bg-gray-800/50">
                                <h2 class="text-lg font-bold text-white">Active Quiz Catalogs</h2>
                            </div>

                            @if($quizzes->isEmpty())
                            <div class="p-8 text-center text-gray-500 text-sm">
                                No quizzes configured. Generate your first one using the parameters configuration interface panel.
                            </div>
                            @else
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-700 text-left">
                                    <thead class="bg-gray-900/50 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">Quiz Specification</th>
                                            <th scope="col" class="px-6 py-3">Category Taxonomy</th>
                                            <th scope="col" class="px-6 py-3 text-right">Administrative Options</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-700 bg-gray-800 text-sm">
                                        @foreach($quizzes as $quiz)
                                        <tr class="hover:bg-gray-700/30 transition-colors">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-200">
                                                {{ $quiz->name }}
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <!-- Dynamic Eloquent relationship mapping safety wrapper fallback string check -->
                                                <span class="inline-flex items-center rounded-md bg-blue-500/10 px-2 py-1 text-xs font-medium text-blue-400 ring-1 ring-inset ring-blue-500/20">
                                                    {{ $quiz->categories->name ?? 'Uncategorised' }}
                                                </span>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4 text-right font-medium space-x-4">
                                                <a href="{{ url('/mcqs/'.$quiz->id) }}"
                                                    class="text-emerald-400 hover:text-emerald-300 transition">
                                                    View MCQs
                                                </a>
                                                <a href="{{ url('/quizzes/edit/'.$quiz->id) }}"
                                                    class="text-blue-400 hover:text-blue-300 transition">
                                                    Edit
                                                </a>
                                                <a href="{{ url('/quizzes/delete/'.$quiz->id) }}"
                                                    onclick="return confirm('Are you sure you want to completely drop this quiz profile? All nested MCQs structural mappings will be missing from deployment arrays.')"
                                                    class="text-red-400 hover:text-red-300 transition">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endif
                        </div>

                    </div>
                </main>
            </div>

        </div>
    </x-slot>
</x-layout>