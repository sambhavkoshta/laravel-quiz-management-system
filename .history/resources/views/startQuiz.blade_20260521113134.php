<x-layout>

    <x-slot name="main">

        @if($mcqs->count() > 0)

        <div class="min-h-screen bg-gray-100 p-6 m-2 rounded-2xl">

            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

                <div class="bg-blue-600 text-white p-6">

                    <h1 class="text-4xl font-bold text-center">
                        {{$quiz->name}}
                    </h1>

                </div>

                <form
                    id="quizForm"
                    action="{{url('/quiz/submit/'.$quiz->id)}}"
                    method="post"
                    class="p-6">

                    @csrf

                    <div class="mb-6 text-center">

                        <h2
                            id="questionCounter"
                            class="text-2xl font-bold text-gray-700">
                            Question 1 of {{$mcqs->count()}}
                        </h2>

                    </div>

                    <div class="mb-6 text-center">
                        <h2 id="timer"></h2>
                    </div>

                    @foreach($mcqs as $key => $mcq)

                    <div
                        class="question {{$key == 0 ? 'block' : 'hidden'}} bg-gray-50 p-6 rounded-2xl shadow-sm">

                        <h3 class="text-xl font-semibold text-gray-700 mb-4">

                            {{$loop->iteration}}.
                            {{$mcq->question}}

                        </h3>

                        <div class="space-y-3">

                            @foreach($mcq->options as $option)

                            <label class="flex items-center gap-3">

                                <input
                                    type="radio"
                                    name="answers[{{$mcq->id}}]"
                                    value="{{$option->id}}"
                                    class="w-4 h-4">

                                <span>
                                    {{$option->option_text}}
                                </span>

                            </label>

                            @endforeach

                        </div>

                    </div>

                    @endforeach

                    <div class="flex justify-between mt-8">

                        <button
                            type="button"
                            id="prevBtn"
                            class="bg-gray-500 text-white px-6 py-3 rounded-xl hover:bg-gray-600 transition hidden">

                            Previous

                        </button>

                        <button
                            type="button"
                            id="nextBtn"
                            class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition ml-auto">

                            Next

                        </button>

                        <button
                            type="submit"
                            id="submitBtn"
                            class="bg-green-600 text-white px-6 py-3 rounded-xl hover:bg-green-700 transition hidden">

                            Submit Quiz

                        </button>

                    </div>

                </form>

            </div>

        </div>

        @else

        <div class="bg-yellow-100 text-yellow-700 p-4 rounded-xl text-center text-xl m-4">

            No MCQs available for this quiz.

        </div>

        @endif

        <script>
            let time = 6000*10;

            let timer = document.getElementById('timer');
            
            setInterval(() => {
                time--;
                let min = Math.floor(time/60);
                let sec = time % 60;
                timer.innn
            }, 1000);



            let questions =
                document.querySelectorAll('.question');

            let currentQuestion = 0;

            let nextBtn =
                document.getElementById('nextBtn');

            let prevBtn =
                document.getElementById('prevBtn');

            let submitBtn =
                document.getElementById('submitBtn');

            let questionCounter =
                document.getElementById('questionCounter');

            function showQuestion(index) {

                questions.forEach((question) => {

                    question.classList.add('hidden');

                });

                questions[index]
                    .classList.remove('hidden');

                questionCounter.innerText =
                    `Question ${index + 1} of ${questions.length}`;

                if (index == 0) {
                    prevBtn.classList.add('hidden');
                } else {
                    prevBtn.classList.remove('hidden');
                }

                if (index == questions.length - 1) {
                    nextBtn.classList.add('hidden');
                    submitBtn.classList.remove('hidden');
                } else {
                    nextBtn.classList.remove('hidden');
                    submitBtn.classList.add('hidden');
                }

            }

            nextBtn.addEventListener('click', () => {

                if (currentQuestion < questions.length - 1) {
                    currentQuestion++;

                    showQuestion(currentQuestion);
                }

            });

            prevBtn.addEventListener('click', () => {

                if (currentQuestion > 0) {
                    currentQuestion--;

                    showQuestion(currentQuestion);
                }

            });
        </script>

    </x-slot>

</x-layout>