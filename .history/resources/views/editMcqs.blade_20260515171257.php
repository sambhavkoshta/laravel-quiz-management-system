<h1>Edit MCQs</h1>
<form action="{{url('/mcqs/add/'.$mcq->id)}}" method="post">
    @csrf
    <input type="text" name="question" placeholder="Enter Question" value="{{$mcq->question}}"><br>
    <input type="text" name="option_a" placeholder="Option A" value="{{$mcq->option-_a}}"><br>
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