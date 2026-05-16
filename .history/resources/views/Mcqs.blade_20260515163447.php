<h1>Create MCQs</h1>
<form action="{{url('/mcqs/add')}}" method="post">
    @csrf
    <input type="text" name="question" placeholder="Enter Quiz Name"><br>
    <button type="submit">Add</button>
</form>

<div>
    @foreach($mcqs as $mcq)
    <div style="display: flex; padding: 10px;">
        <div style="margin:5px">{{$mcq->name}}</div>
        <div style="margin:5px">{{$mcq->quizes->name}}</div>
        <div style="margin:5px"><a href="{{url('/mcq/edit/'.$mcq->id)}}">Edit</a></div>
        <div style="margin:5px"><a href="{{url('/mcq/delete/'.$mcq->id)}}">Delete</a></div>
    </div>
    @endforeach
</div>