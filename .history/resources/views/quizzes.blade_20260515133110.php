<h1>Create Quiz</h1>
<form action="{{url('/quizzes/add')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Catrgory Name"><br>
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{$category_id}}">{{$category->name}}</option>
    </select>
    <button type="submit">Add</button>
</form>

<div>
    @foreach($quizzes as $quiz)
    <div style="display: flex; padding: 10px;">
        <div style="margin:5px">{{$quiz->name}}</div>
        <div style="margin:5px"><a href="{{url('/categories/edit/'.$quiz->id)}}">Edit</a></div>
        <div style="margin:5px"><a href="{{url('/categories/delete/'.$quiz->id)}}">Delete</a></div>
    </div>
    @endforeach
</div>