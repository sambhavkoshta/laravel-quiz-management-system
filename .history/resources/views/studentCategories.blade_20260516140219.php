<div class="min-h-screen bg-gray-100 p-6">

    <div class="max-w-5xl mx-auto">


        <h1 class="text-4xl font-bold text-gray-800 mb-8">

            Quiz Categories

        </h1>


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($categories as $category)

            <div class="bg-white rounded-2xl shadow-md p-6
            hover:shadow-xl transition">


                <h2 class="text-2xl font-semibold text-gray-700 mb-4">

                    {{$category->name}}

                </h2>


                <a
                    href="{{url('/student/quizzes/'.$category->id)}}"

                    class="inline-block bg-blue-600 text-white
                px-4 py-2 rounded-xl
                hover:bg-blue-700 transition">

                    View Quizzes

                </a>

            </div>

            @endforeach

        </div>

    </div>

</div>