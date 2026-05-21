<x-layout>
    <x-slot name="main">
        @if($quizzes->count()>0)
        <div class="min-h-screen bg-white m-4 rounded-xl overflow-hidden">
            <div class="text-3xl text-center bg-blue-500 font-bold text-gray-700">
                <h2 class="p-4 text-white">Quizzes</h2>
                <hr>
            </div>
            @if(session('msg'))
            <div class="text-red-500 text-center">
                {{session('msg')}}
            </div>
            @endif
            @foreach($quizzes as $quiz)
            <div class="p-4 max-w-md text-xl text-gray-700 text-center">{{$quiz->name}}
                <span class="text-sm bg-blue-600 px-2 py-1 text-white rounded-xl"><a href="{{url('/quiz/start/'.$quiz->id)}}">Start Quiz</a></span>
                <span class="text-sm bg-blue-600 px-2 py-1 text-white rounded-xl"><a href="{{url('/quiz/leaderboard/'.$quiz->id)}}">Leaderboard</a></span>
            </div>
            @endforeach
            <hr>
            <div class="flex justify-center m-4">
                <a href="{{url('/student/history')}}" class="bg-green-500 px-4 py-2 text-white rounded-2xl shadow">Quiz History</a>
            </div>
        </div>
        @else
        <div class="bg-yellow-100 text-yellow-700 p-4 rounded-xl text-xl text-center m-4">
            No Quiz available for this category.
        </div>
        @endif
    </x-slot>
</x-layout>