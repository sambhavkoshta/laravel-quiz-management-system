<h1>{{$category->name}} Quizzes</h1>

@foreach($quizzes as $quiz)

<div>

    <h2>{{$quiz->name}}</h2>

    <a href="{{url('/quiz/start/'.$quiz->id)}}">
        Start Quiz
    </a>

</div>

@endforeach