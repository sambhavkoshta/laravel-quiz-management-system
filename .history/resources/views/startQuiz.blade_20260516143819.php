<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-white m-4 rounded-xl">
            <div>
                <h1 class="text-3xl text-center p-4 font-bold text-gray-700">{{$quiz->name}}</h1>
                <hr>
            </div>

            <div>
                <form action="{{url('/quiz/submit/'.$quiz->id)}}" method="post" class="p-4">
                    @csrf
                    @foreach($mcqs as $mcq)
                    <div>
                        <h3 class="text-xl font-semibold text-gray-700">{{$mcq->question}}</h3>
                        <input type="radio" name="answers[{{$mcq->id}}]" value="A" class=""> {{$mcq->option_a}}<br>
                        <input type="radio" name="answers[{{$mcq->id}}]" value="B"> {{$mcq->option_b}}<br>
                        <input type="radio" name="answers[{{$mcq->id}}]" value="C"> {{$mcq->option_c}}<br>
                        <input type="radio" name="answers[{{$mcq->id}}]" value="D"> {{$mcq->option_d}}
                    </div>
                    @endforeach
                    <button type="submit">
                        Submit Quiz
                    </button>
                </form>
            </div>
        </div>
    </x-slot>
</x-layout>