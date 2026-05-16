<h1>{{$quiz->name}}</h1>

<form action="{{url('/quiz/submit/'.$quiz->id)}}"method="post">
    @csrf
    @foreach($mcqs as $mcq)
    <div>
        <h3>{{$mcq->question}}</h3>
        <input type="radio" name="answers[{{$mcq->id}}]"  value="A">{{$mcq->option_a}}<br>
        <input type="radio" name="answers[{{$mcq->id}}]" value="B"> {{$mcq->option_b}}<br>
        <input
            type="radio"
            name="answers[{{$mcq->id}}]"
            value="C">

        {{$mcq->option_c}}

        <br>

        <input
            type="radio"
            name="answers[{{$mcq->id}}]"
            value="D">

        {{$mcq->option_d}}

    </div>

    <hr>

    @endforeach

    <button type="submit">
        Submit Quiz
    </button>

</form>