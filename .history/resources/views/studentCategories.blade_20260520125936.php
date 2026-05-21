<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-gray-100 m-4 rounded-xl">
            <div class="text-3xl text-center p-4 font-bold text-gray-700">
                <h2 class="p-4">Quiz Categories</h2>
                <hr>
            </div>
            @if($categories->count()>0)
            @foreach($categories as $category)
            <div class="p-4 text-xl bg-white max-w-6xl mx-auto  round text-gray-700 text-center">Category : {{$category->name}} <span class="text-sm bg-blue-600 px-2 py-1 text-white rounded-xl"><a href="{{url('/student/quizzes/'.$category->id)}}">View Quiz</a></span></div>
            @endforeach
            @else
            <div class="bg-yellow-100 text-yellow-700 p-4 rounded-xl text-xl text-center m-4">
                No category available.
            </div>
            @endif
        </div>
    </x-slot>
</x-layout>