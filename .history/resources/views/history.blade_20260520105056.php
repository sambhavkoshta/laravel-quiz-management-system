<x-layout>
    <x-slot name="main">
        <div class="bg-white min-h-screen rounded-2xl m-4 px-4 sm:px-6 lg:px-8 py-8">
            
            <div class="sm:flex sm:items-center sm:justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-gray-800 sm:text-3xl text-center">Quiz Results</h1>
                </div>
            </div>

            <div class="overflow-hidden bg-white shadow-sm ring-1 ring-black ring-opacity-5 rounded-lg">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 sm:pl-6">Result ID</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Student ID</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Quiz ID</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Score</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Total Questions</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Percentage</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">Created At</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @forelse($results as $result)
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">#{{ $result->id }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-600">{{ $result->student_id }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-600">
                                    <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                                        {{ $result->quiz_id }}
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm font-semibold text-gray-900">{{ $result->score }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $result->total_questions }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm font-medium">
                                    @php
                                        $percentage = $result->total_questions > 0 ? round(($result->score / $result->total_questions) * 100, 2) : 0;
                                    @endphp
                                    <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium {{ $percentage >= 50 ? 'bg-green-50 text-green-700 ring-1 ring-inset ring-green-600/20' : 'bg-red-50 text-red-700 ring-1 ring-inset ring-red-600/20' }}">
                                        {{ $percentage }}%
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $result->created_at }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center text-sm font-medium text-gray-400 bg-gray-50/50">
                                    <svg class="mx-auto h-12 w-12 text-gray-300 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1M17 10V4a1 1 0 00-1-1h-4" />
                                    </svg>
                                    No results found
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </x-slot>
</x-layout>
