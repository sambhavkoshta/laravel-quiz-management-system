<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-white m-4 rounded-xl">
            <div class="text-3xl text-center bg-blue font-bold text-gray-700">
                <h2 class="p-4">Quizzes</h2>
                <hr>
            </div>
            @if(session('msg'))
            <div class="text-red-500 text-center">
                {{session('msg')}}
            </div>
            @endif
            @foreach($quizzes as $quiz)
            <div class="p-4 text-xl text-gray-700 text-center">Quiz : {{$quiz->name}} <span class="text-sm bg-blue-600 px-2 py-1 text-white rounded-xl"><a href="{{url('/quiz/start/'.$quiz->id)}}">Start Quiz</a></span></div>
            @endforeach
            <hr>
            <div class="flex justify-center m-4">
                <a href="{{url('/student/history')}}" class="bg-green-500 px-4 py-2 text-white rounded-2xl text-xl">Quiz History</a>
            </div>
        </div>
    </x-slot>
</x-layout>