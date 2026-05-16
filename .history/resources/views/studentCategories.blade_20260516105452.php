<h2>Quiz Categories</h2>
@foreach($categories as $category)
<div>{{$category->name}}</div>
<a href="/student/quizzes/.$category-"></a>
@endforeach