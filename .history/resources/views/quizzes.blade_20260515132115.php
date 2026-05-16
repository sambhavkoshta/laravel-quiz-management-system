<h1>Create Quiz</h1>
<form action="{{url('/quizzes/add')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Catrgory Name"><br>
    <button type="submit">Add</button>
</form>

<div>
    @foreach($quizzes as $)
    <div style="display: flex; padding: 10px;">
        <div style="margin:5px">{{$c->name}}</div>
        <div style="margin:5px"><a href="{{url('/categories/edit/'.$c->id)}}">Edit</a></div>
        <div style="margin:5px"><a href="{{url('/categories/delete/'.$c->id)}}">Delete</a></div>
    </div>
    @endforeach
</div>