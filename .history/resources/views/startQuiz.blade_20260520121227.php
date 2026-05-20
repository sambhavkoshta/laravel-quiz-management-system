<x-layout>

    <x-slot name="main">

        @if($mcqs->count()>0)
        <div class="min-h-screen bg-gray-100 p-6">

            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

                <div class="bg-blue-600 text-white p-6">
                    <h1 class="text-4xl font-bold text-center">
                        {{$quiz->name}}
                    </h1>
                </div>

                <form action="{{url('/quiz/submit/'.$quiz->id)}}" method="post" class="p-6 space-y-6">
                    @csrf

                    @foreach($mcqs as $mcq)

                    <div class="bg-gray-50 p-6 rounded-2xl shadow-sm">

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
                                    value="{{$option->id}}">

                                <span>
                                    {{$option->option_text}}
                                </span>

                            </label>

                            @endforeach

                        </div>

                    </div>

                    @endforeach

                    <button
                        type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-2xl text-xl font-semibold hover:bg-blue-700 transition">
                        Submit Quiz
                    </button>

                </form>

            </div>

        </div>
        @else
        <div class="bg-yellow-100 text-yellow-700 p-4 rounded-xl text-center text-2xl">

            No MCQs available for this quiz.

        </div>
        @endif
    </x-slot>

</x-layout>