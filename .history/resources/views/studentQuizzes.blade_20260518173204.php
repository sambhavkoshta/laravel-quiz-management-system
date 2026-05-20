<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-white m-4 rounded-xl">
            <div class="text-3xl text-center p-4 font-bold text-gray-700">
                @if(session('msg'))
                <div class="text-red-500 text-center bg-red">
                    {{session('msg')}}
                </div>
                @endif
                <h2 class="p-4">Quizzes</h2>
                <hr>
            </div>
            @foreach($quizzes as $quiz)
            <div class="p-4 text-xl text-gray-700 text-center">Quiz : {{$quiz->name}} <span class="text-sm bg-blue-600 px-2 py-1 text-white rounded-xl"><a href="{{url('/quiz/start/'.$quiz->id)}}">Start Quiz</a></span></div>
            @endforeach
        </div>
    </x-slot>
</x-layout>