<x-layout>
    <x-slot name="main">
        <div class="container mt-5">

            <h2 class="mb-4">Quiz Results</h2>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Result ID</th>
                        <th>Student ID</th>
                        <th>Quiz ID</th>
                        <th>Score</th>
                        <th>Total Questions</th>
                        <th>Percentage</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($results as $result)
                    <tr>
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->student_id }}</td>
                        <td>{{ $result->quiz_id }}</td>
                        <td>{{ $result->score }}</td>
                        <td>{{ $result->total_questions }}</td>
                        <td>
                            {{ $result->total_questions > 0 
                            ? round(($result->score / $result->total_questions) * 100, 2) . '%' 
                            : '0%' 
                        }}
                        </td>
                        <td>{{ $result->created_at }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No results found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </x-slot>
</x-layout>