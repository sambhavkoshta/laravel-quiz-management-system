<h2>Quiz Categories</h2>
@foreach($categories as $category)
<div>{{$category->name}}</div>
<a href="{{url('/student/quizzes/.$category->id')}}">View Quiz</a>
@endforeach