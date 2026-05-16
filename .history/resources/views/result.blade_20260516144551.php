<x-layout>

    <x-slot name="main">

        <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">

            <div class="w-full max-w-2xl bg-white rounded-3xl shadow-xl overflow-hidden">


                <div class="bg-blue-600 text-white p-8 text-center">

                    <h1 class="text-4xl font-bold">

                        Quiz Result

                    </h1>

                </div>


                <div class="p-8 text-center space-y-6">


                    <h2 class="text-3xl font-semibold text-gray-700">

                        {{$quiz->name}}

                    </h2>


                    <div class="bg-gray-100 rounded-2xl p-8">

                        <p class="text-xl text-gray-600 mb-2">

                            Your Score

                        </p>

                        <h3 class="text-5xl font-bold text-blue-600">

                            {{$score}} / {{$mcqs->count()}}

                        </h3>

                    </div>


                    @php

                    $percentage =
                    ($score / $mcqs->count()) * 100;

                    @endphp

                    <div>

                        <p class="text-2xl font-semibold text-gray-700">

                            Percentage :
                            {{round($percentage)}}%

                        </p>

                    </div>


                    @if($percentage >= 50)

                    <div class="text-green-600 text-2xl font-bold">

                        🎉 Passed

                    </div>

                    @else

                    <div class="text-red-600 text-2xl font-bold">

                        ❌ Failed

                    </div>

                    @endif


                    <a
                        href="{{url('/student/categories')}}"

                        class="inline-block bg-blue-600 text-white
                    px-6 py-3 rounded-2xl text-lg
                    hover:bg-blue-700 transition">

                        Back to Categories

                    </a>

                </div>

            </div>

        </div>

    </x-slot>

</x-layout>