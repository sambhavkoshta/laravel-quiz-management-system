<h1>Edit MCQs</h1>
<form action="{{url('/mcqs/update/'.$mcq->id)}}" method="post">
    @csrf
    <input type="text" name="question" placeholder="Enter Question" value="{{$mcq->question}}"><br>
    <input type="text" name="option_a" placeholder="Option A" value="{{$mcq->option_a}}"><br>
    <input type="text" name="option_b" placeholder="Option B" value="{{$mcq->option_b}}"><br>
    <input type="text" name="option_c" placeholder="Option C" value="{{$mcq->option_c}}"><br>
    <input type="text" name="option_d" placeholder="Option D" value="{{$mcq->option_d}}"><br>
    <select name="correct_answer">
        <option value="A" {{$mcq->correct_answer == 'A' ? 'selected' : ''}}>A</option>
        <option value="B" {{$mcq->correct_answer == 'B' ? 'selected' : ''}}>B</option>
        <option value="C" {{$mcq->correct_answer == 'C' ? 'selected' : ''}}>C</option>
        <option value="D" {{$mcq->correct_answer == 'D' ? 'selected' : ''}}>D</option>
    </select>
    <button type="submit">update</button>
</form>