<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
            <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
                <h1 class="text-3xl font-bold text-gray-700 mb-6 text-center">
                    Edit Category
                </h1>
                <form
                    action="{{url('/categories/update/'.$category->id)}}"
                    method="post"
                    class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-gray-600 mb-2 font-medium">
                            Category Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            value="{{old('name',$category->name)}}"
                            class="w-full border border-gray-300
                        px-4 py-3 rounded-xl
                        focus:outline-none
                        focus:ring-2
                        focus:ring-blue-500">
                        
                    </div>
                    <button
                        type="submit"
                        class="w-full bg-blue-600 text-white
                    py-3 rounded-xl text-lg font-semibold
                    hover:bg-blue-700 transition">
                        Update Category
                    </button>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>