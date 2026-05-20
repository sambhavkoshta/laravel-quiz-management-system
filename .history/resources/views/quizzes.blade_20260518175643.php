<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-gray-100 m-4">
            <div class="max-w-6xl mx-auto space-y-8 ">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h1 class="text-3xl font-bold text-gray-700 mb-6">
                        Create Quiz
                    </h1>
                    <form action="{{url('/quizzes/add')}}" method="post" class="flex flex-col md:flex-row gap-4">
                        @csrf
                        <input
                            type="text"
                            name="name"
                            placeholder="Enter Quiz Name"
                            class="flex-1 border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <select
                            name="category_id"
                            class="border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>
                            @endforeach
                        </select>
                        <button
                            type="submit"
                            class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                            Add Quiz
                        </button>
                    </form>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-700 mb-6">
                        All Quizzes
                    </h2>
                    <div class="space-y-4">
                        @foreach($quizzes as $quiz)
                        <div class="bg-gray-50 rounded-xl p-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-700">
                                    {{$quiz->name}}
                                </h3>
                                <p class="text-gray-500">
                                    {{$quiz->categories->name}}
                                </p>
                            </div>
                            <div class="flex flex-wrap gap-3">
                                <a
                                    href="{{url('/quizzes/edit/'.$quiz->id)}}"
                                    class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                                    Edit
                                </a>
                                <a
                                    href="{{url('/mcqs/'.$quiz->id)}}"
                                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                    View MCQs
                                </a>
                                <a
                                    href="{{url('/quizzes/delete/'.$quiz->id)}}"
                                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
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