<h1>{{$category->name}} Quizzes</h1>

@foreach($quizzes as $quiz)

<div>

    <h2>{{$quiz->name}}</h2>

    <a href="{{url('/quiz/start/'.$quiz->id)}}">
        Start Quiz
    </a>

</div>

@endforeach

<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-white m-4 rounded-xl">
            <div class="text-3xl text-center p-4 font-bold text-gray-700">
                <h2 class="p-4">Quiz Categories</h2>
                <hr>
            </div>
            @foreach($quizzes as $quiz)
            <div class="p-4 text-xl text-gray-700 text-center">Category : {{$category->name}} <span class="text-sm bg-blue-600 px-2 py-1 text-white rounded-xl"><a href="{{url('/student/quizzes/'.$category->id)}}">View Quiz</a></span></div>
            @endforeach
        </div>
    </x-slot>
</x-layout>