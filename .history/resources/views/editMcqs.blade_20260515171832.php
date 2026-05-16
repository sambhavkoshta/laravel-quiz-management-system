<h1>Edit MCQ</h1>

<form action="{{url('/mcq/update/'.$mcq->id)}}" method="post">

    @csrf

    <input
        type="text"
        name="question"
        value="{{$mcq->question}}"
        placeholder="Enter Question">

    <br><br>

    <input
        type="text"
        name="option_a"
        value="{{$mcq->option_a}}"
        placeholder="Option A">

    <br><br>

    <input
        type="text"
        name="option_b"
        value="{{$mcq->option_b}}"
        placeholder="Option B">

    <br><br>

    <input
        type="text"
        name="option_c"
        value="{{$mcq->option_c}}"
        placeholder="Option C">

    <br><br>

    <input
        type="text"
        name="option_d"
        value="{{$mcq->option_d}}"
        placeholder="Option D">

    <br><br>

    <select name="correct_answer">

        <option
            value="A"
            {{$mcq->correct_answer == 'A' ? 'selected' : ''}}>
            A
        </option>

        <option
            value="B"
            {{$mcq->correct_answer == 'B' ? 'selected' : ''}}>
            B
        </option>

        <option
            value="C"
            {{$mcq->correct_answer == 'C' ? 'selected' : ''}}>
            C
        </option>

        <option
            value="D"
            {{$mcq->correct_answer == 'D' ? 'selected' : ''}}>
            D
        </option>

    </select>

    <br><br>

    <button type="submit">
        Update MCQ
    </button>

</form>