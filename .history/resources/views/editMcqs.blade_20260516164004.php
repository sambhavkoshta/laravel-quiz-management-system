<x-layout>
    <x-slot name="main">

        <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">

            <div class="w-full max-w-3xl bg-white rounded-2xl shadow-lg p-8">

                <h1 class="text-3xl font-bold text-gray-700 mb-6 text-center">
                    Edit MCQ
                </h1>

                <form action="{{url('/mcqs/update/'.$mcq->id)}}" method="post" class="space-y-5">
                    @csrf


                    <div>

                        <label class="block text-gray-600 font-medium mb-2">
                            Question
                        </label>

                        <input
                            type="text"
                            name="question"
                            value="{{$mcq->question}}"
                            placeholder="Enter Question"
                            class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">

                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <div>

                            <label class="block text-gray-600 font-medium mb-2">
                                Option A
                            </label>

                            <input
                                type="text"
                                name="option_a"
                                value="{{$mcq->option_a}}"
                                placeholder="Option A"
                                class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">

                        </div>
                        <div>
                            <label class="block text-gray-600 font-medium mb-2">
                                Option B
                            </label>
                            <input
                                type="text"
                                name="option_b"
                                value="{{$mcq->option_b}}"
                                placeholder="Option B"
                                class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-600 font-medium mb-2">
                                Option C
                            </label>
                            <input
                                type="text"
                                name="option_c"
                                value="{{$mcq->option_c}}"
                                placeholder="Option C"
                                class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-600 font-medium mb-2">
                                Option D
                            </label>
                            <input
                                type="text"
                                name="option_d"
                                value="{{$mcq->option_d}}"
                                placeholder="Option D"
                                class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-600 font-medium mb-2">
                            Correct Answer
                        </label>
                        <select
                            name="correct_answer"
                            class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="A" {{$mcq->correct_answer == 'A' ? 'selected' : ''}}>
                                Option A
                            </option>
                            <option value="B" {{$mcq->correct_answer == 'B' ? 'selected' : ''}}>
                                Option B
                            </option>
                            <option value="C" {{$mcq->correct_answer == 'C' ? 'selected' : ''}}>
                                Option C
                            </option>
                            <option value="D" {{$mcq->correct_answer == 'D' ? 'selected' : ''}}>
                                Option D
                            </option>
                        </select>
                    </div>
                    <button
                        type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-xl text-lg font-semibold hover:bg-blue-700 transition">
                        Update MCQ
                    </button>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>