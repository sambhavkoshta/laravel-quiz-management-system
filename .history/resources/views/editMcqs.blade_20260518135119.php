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

                    <div id="optionsContainer" class="space-y-4">

                        @foreach($mcq->options as $key => $option)

                        <div class="flex items-center gap-3">

                            <input
                                type="radio"
                                name="correct_option"
                                value="{{$key}}"
                                {{$option->is_correct ? 'checked' : ''}}>

                            <input
                                type="text"
                                name="options[]"
                                value="{{$option->option_text}}"
                                class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">

                        </div>

                        @endforeach

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
                        Update MCQ
                    </button>

                </form>

            </div>
        </div>

        <script>
            let addOptionBtn = document.getElementById('addOptionBtn');
            let optionsContainer = document.getElementById('optionsContainer');

            let optionCount = @json(count($mcq - > options));

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