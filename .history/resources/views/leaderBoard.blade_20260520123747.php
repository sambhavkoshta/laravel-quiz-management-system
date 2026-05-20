<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-gray-100 p-6">
            <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="bg-blue-600 text-white p-6">
                    <h1 class="text-4xl font-bold text-center">
                        {{$quiz->name}} Leaderboard
                    </h1>
                </div>
                <div class="p-6">
                    @if($results->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-200 text-gray-700">
                                    <th class="p-4 text-left">
                                        Rank
                                    </th>
                                    <th class="p-4 text-left">
                                        Student
                                    </th>
                                    <th class="p-4 text-left">
                                        Score
                                    </th>
                                    <th class="p-4 text-left">
                                        Total Questions
                                    </th>
                                    <th class="p-4 text-left">
                                        Percentage
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $result)
                                <tr class="border-b hover:bg-gray-50 transition">
                                    <td class="p-4 font-bold text-blue-600">
                                        @if($loop->iteration == 1)
                                        🥇
                                        @elseif($loop->iteration == 2)
                                        🥈
                                        @elseif($loop->iteration == 3)
                                        🥉
                                        @else
                                        {{$loop->iteration}}
                                        @endif
                                    </td>
                                    <td class="p-4">
                                        {{$result->student->name}}
                                    </td>
                                    <td class="p-4 font-semibold text-green-600">
                                        {{$result->score}}
                                    </td>

                                    <td class="p-4">
                                        {{$result->total_questions}}
                                    </td>

                                    <td class="p-4">

                                        {{
                                            round(
                                                ($result->score / $result->total_questions) * 100
                                            )
                                        }}%

                                    </td>

                                </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                    @else

                    <div class="bg-yellow-100 text-yellow-700 p-4 rounded-xl text-center">

                        No Results Found

                    </div>

                    @endif

                </div>

            </div>

        </div>

    </x-slot>

</x-layout>