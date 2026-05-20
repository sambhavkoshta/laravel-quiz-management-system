<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-gray-100 m-4 rounded-2xl">
            <div class="max-w-6xl mx-auto space-y-8 p-">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h1 class="text-3xl font-bold text-gray-700 mb-6">
                        Create Category
                    </h1>
                    <form
                        action="{{url('/categories/add')}}"
                        method="post"
                        class="flex flex-col md:flex-row gap-4">
                        @csrf
                        <input
                            type="text"
                            name="name"
                            placeholder="Enter Category Name"
                            class="flex-1 border border-gray-300
                        px-4 py-3 rounded-xl
                        focus:outline-none
                        focus:ring-2
                        focus:ring-blue-500">
                        <button
                            type="submit"
                            class="bg-blue-600 text-white
                        px-6 py-3 rounded-xl
                        hover:bg-blue-700 transition">
                            Add Category
                        </button>
                    </form>
                    @error('name')
                    <div class="text-red-500">{{$message}}</div>
                    @enderror
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-700 mb-6">
                        All Categories
                    </h2>
                    <div class="space-y-4">
                        @foreach($category as $c)
                        <div class="flex items-center
                        justify-between
                        bg-gray-50 p-4 rounded-xl">
                            <h3 class="text-lg font-semibold text-gray-700">
                                {{$c->name}}
                            </h3>
                            <div class="flex gap-3">
                                <a
                                    href="{{url('/categories/edit/'.$c->id)}}"
                                    class="bg-yellow-500 text-white
                                px-4 py-2 rounded-lg
                                hover:bg-yellow-600 transition">
                                    Edit
                                </a>
                                <a
                                    href="{{url('/categories/delete/'.$c->id)}}"
                                    class="bg-red-500 text-white
                                px-4 py-2 rounded-lg
                                hover:bg-red-600 transition">
                                    Delete
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>