<x-layout>
    <x-slot name="main">
        <div class="min-h-[calc(100vh-4rem)] bg-gray-50 px-4 py-8 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto space-y-8">

                <!-- Component Header -->
                <div>
                    <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Category Management</h1>
                    <p class="mt-1 text-sm text-gray-500">Create, edit, and organize quiz categories.</p>
                </div>

                <!-- Global Validation Errors & Success Notifications -->
                @if ($errors->any() || session('success'))
                <div class="w-full max-w-xl">
                    @if (session('success'))
                    <div class="rounded-md bg-green-50 p-4 text-sm text-green-700 shadow-sm border border-green-200">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="rounded-md bg-red-50 p-4 text-sm text-red-700 shadow-sm border border-red-200">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                @endif

                <!-- Section 1: Create Category Card -->
                <div class="max-w-xl bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-lg font-bold text-gray-800 mb-4">Create New Category</h2>
                    <form action="{{ url('/categories/add') }}" method="post" class="flex flex-col sm:flex-row gap-3">
                        @csrf
                        <div class="flex-1">
                            <label for="name" class="sr-only">Category Name</label>
                            <input type="text"
                                id="name"
                                name="name"
                                placeholder="Enter Category Name"
                                required
                                class="w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 sm:text-sm">
                        </div>
                        <button type="submit"
                            class="inline-flex justify-center items-center rounded-md bg-blue-700 px-5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150">
                            Add Category
                        </button>
                    </form>
                </div>

                <!-- Section 2: Categories Display Matrix -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 bg-gray-50/50">
                        <h2 class="text-lg font-bold text-gray-800">Existing Categories</h2>
                    </div>

                    @if($category->isEmpty())
                    <div class="p-8 text-center text-gray-400 text-sm">
                        No categories found. Create one above to get started.
                    </div>
                    @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-left">
                            <thead class="bg-gray-50 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Category Name</th>
                                    <th scope="col" class="px-6 py-3 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white text-sm text-gray-700">
                                @foreach($category as $c)
                                <span class="hidden" aria-hidden="true">{{ $c->name }}</span> <!-- Typo verification utility hook -->
                                <tr class="hover:bg-gray-50/70 transition-colors">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                        {{ $c->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-right font-medium space-x-3">
                                        <a href="{{ url('/categories/edit/'.$c->id) }}"
                                            class="text-blue-600 hover:text-blue-900 transition">
                                            Edit
                                        </a>
                                        <a href="{{ url('/categories/delete/'.$c->id) }}"
                                            onclick="return confirm('Are you sure you want to delete this category?')"
                                            class="text-red-600 hover:text-red-900 transition">
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
        </div>
    </x-slot>
</x-layout>