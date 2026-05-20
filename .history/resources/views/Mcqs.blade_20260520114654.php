<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-gray-100 p-6">
            <div class="max-w-6xl mx-auto space-y-8">

                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h1 class="text-3xl font-bold text-gray-700 mb-6">
                        Create MCQ
                    </h1>

                    @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl mb-4">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session('success'))
                    <div class="bg-green-100 text-green-700
                        p-4 rounded-xl ">{{session('success')}}
                    </div>
                @endif

                <form action="{{url('/mcqs/add/'.$quiz->id)}}" method="post" class="space-y-4">
                    @csrf

                    <div>
                        <input
                            type="text"
                            name="question"
                            value="{{ old('question') }}"
                            placeholder="Enter Question"
                            class="w-full border @error('question') border-red-500 @else border-gray-300 @enderror px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('question')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Options</label>

                        <div id="optionsContainer" class="space-y-4">
                            <div class="flex items-center gap-3">
                                <input
                                    type="radio"
                                    name="correct_option"
                                    value="0"
                                    {{ old('correct_option') === '0' ? 'checked' : '' }}>

                                <input
                                    type="text"
                                    name="options[]"
                                    value="{{ old('options.0') }}"
                                    placeholder="Option 1"
                                    class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div class="flex items-center gap-3">
                                <input
                                    type="radio"
                                    name="correct_option"
                                    value="1"
                                    {{ old('correct_option') === '1' ? 'checked' : '' }}>

                                <input
                                    type="text"
                                    name="options[]"
                                    value="{{ old('options.1') }}"
                                    placeholder="Option 2"
                                    class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>

                        @error('options')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                        @error('correct_option')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <button
                        type="button"
                        id="addOptionBtn"
                        class="bg-green-500 text-white px-4 py-2 rounded-xl hover:bg-green-600 transition">
                        + Add Option
                    </button>

                    <button
                        type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-xl text-lg font-semibold hover:bg-blue-700 transition">
                        Add MCQ
                    </button>
                </form>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-700 mb-6">
                    All MCQs
                </h2>

                <div class="space-y-4">
                    @foreach($mcqs as $mcq)
                    <div class="bg-gray-50 rounded-xl p-5 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">
                                {{$mcq->question}}
                            </h3>
                            <p class="text-gray-500">
                                {{$mcq->quizzes->name}}
                            </p>
                        </div>
                        <div class="flex flex-wrap gap-3">
                            <a
                                href="{{url('/mcqs/edit/'.$mcq->id)}}"
                                class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                                Edit
                            </a>
                            <a
                                href="{{url('/mcqs/delete/'.$mcq->id)}}"
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

        <script>
            let addOptionBtn = document.getElementById('addOptionBtn');
            let optionsContainer = document.getElementById('optionsContainer');

            let optionCount = 2;

            addOptionBtn.addEventListener('click', () => {
                let div = document.createElement('div');
                div.className = 'flex items-center gap-3';
                div.innerHTML = `
                    <input
                        type="radio"
                        name="correct_option"
                        value="${optionCount}">

                    <input
                        type="text"
                        name="options[]"
                        placeholder="Option ${optionCount + 1}"
                        class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                `;
                optionsContainer.appendChild(div);
                optionCount++;
            });
        </script>
    </x-slot>
</x-layout>