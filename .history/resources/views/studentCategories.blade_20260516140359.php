<x-layout>
    <x-slot name="main">
        <h2>Quiz Categories</h2>
        @foreach($categories as $category)
        <div>{{$category->name}} <span><a href="{{url('/student/quizzes/'.$category->id)}}">View Quiz</a></span></div>
        @endforeach
    </x-slot>
</x-layout>