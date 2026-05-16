<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
            <div class="w-full max-w-lg bg-white rounded-2xl shadow-lg p-8">
                <h1 class="text-3xl font-bold text-gray-700 mb-6 text-center">
                    Edit Quiz
                </h1>
                <form action="{{url('/quizzes/update/'.$quiz->id)}}" method="post" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-gray-600 font-medium mb-2">
                            Quiz Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            value="{{$quiz->name}}"
                            placeholder="Enter Quiz Name"
                            class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-600 font-medium mb-2">
                            Select Category
                        </label>
                        <select
                            name="category_id"
                            class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($categories as $category)
                            <option
                                value="{{$category->id}}"
                                {{$quiz->category_id == $category->id ? 'selected' : ''}}>
                                {{$category->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button
                        type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-xl text-lg font-semibold hover:bg-blue-700 transition">
                        Update Quiz
                    </button>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>