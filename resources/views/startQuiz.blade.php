<x-layout>

    <x-slot name="main">
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
                            <label class="flex items-center gap-3">
                                <input type="radio" name="answers[{{$mcq->id}}]" value="A">
                                <span>
                                    {{$mcq->option_a}}
                                </span>
                            </label>
                            <label class="flex items-center gap-3">
                                <input type="radio" name="answers[{{$mcq->id}}]" value="B">
                                <span>
                                    {{$mcq->option_b}}
                                </span>
                            </label>
                            <label class="flex items-center gap-3">
                                <input type="radio" name="answers[{{$mcq->id}}]" value="C">
                                <span>
                                    {{$mcq->option_c}}
                                </span>
                            </label>
                            <label class="flex items-center gap-3">
                                <input type="radio" name="answers[{{$mcq->id}}]" value="D">
                                <span>
                                    {{$mcq->option_d}}
                                </span>
                            </label>
                        </div>
                    </div>
                    @endforeach
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-2xl text-xl font-semibold hover:bg-blue-700 transition">
                        Submit Quiz
                    </button>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>