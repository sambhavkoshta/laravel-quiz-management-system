<h1>Edit MCQs</h1>
<form action="{{url('/mcqs/add/'.$mcq->id)}}" method="post">
    @csrf
    <input type="text" name="question" placeholder="Enter Question" value="{{$mcq->question}}"><br>
    <input type="text" name="option_a" placeholder="Option A" value="{{$mcq->option_a}}"><br>
    <input type="text" name="option_b" placeholder="Option B" value="{{$mcq->option_b}}"><br>
    <input type="text" name="option_c" placeholder="Option C" value="{{$mcq->option_c}}"><br>
    <input type="text" name="option_d" placeholder="Option D" value="{{$mcq->option_d}}"><br>
    <select name="category_id">

        @foreach($categories as $category)

        <option
            value="{{$category->id}}"
            {{$quiz->category_id == $category->id ? 'selected' : ''}}>
            {{$category->name}}
        </option>
        @endforeach
    </select>
    <button type="submit">Add</button>
</form>