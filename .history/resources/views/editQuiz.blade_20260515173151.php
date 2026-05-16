<h1>Edit Quiz</h1>

<form action="{{url('/quizzes/update/'.$quiz->id)}}" method="post">
    @csrf

    <input
        type="text"
        name="name"
        value="{{$quiz->name}}"
        placeholder="Enter Quiz Name">

    <br><br>

    <select name="category_id">

        @foreach($categories as $category)

        <option
            value="{{$category->id}}"

            {{$quiz->category_id == $category->id ? 'selected' : ''}}>

            {{$category->name}}

        </option>

        @endforeach
    </select>

    <br><br>

    <button type="submit">Update Quiz</button>

</form>