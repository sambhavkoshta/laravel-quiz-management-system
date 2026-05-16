<h1>Create MCQs</h1>
<form action="{{url('/mcqs/add/'.$quiz->id)}}" method="post">
    @csrf
    <input type="text" name="question" placeholder="Enter Question"><br>
    <input type="text" name="option_a" placeholder="Option A"><br>
    <input type="text" name="option_b" placeholder="Option B"><br>
    <input type="text" name="option_c" placeholder="Option C"><br>
    <input type="text" name="option_d" placeholder="Option D"><br>
    <select name="correct_answer">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select>
    <button type="submit">Add</button>
</form>

<div>
    @foreach($mcqs as $mcq)
    <div style="display: flex; padding: 10px;">
        <div style="margin:5px">{{$mcq->question}}</div>
        <div style="margin:5px">{{$mcq->quizzes->name}}</div>
        <div style="margin:5px"><a href="{{url('/mcqs/edit/'.$mcq->id)}}">Edit</a></div>
        <div style="margin:5px"><a href="{{url('/mcqs/delete/'.$mcq->id)}}">Delete</a></div>
    </div>
    @endforeach
</div>