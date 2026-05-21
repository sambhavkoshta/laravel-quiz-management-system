<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-gray-100 m-4 rounded-xl overflow-hidden">
            <div class="text-3xl text-center p-4 font-bold text-white bg-blue-500">
                <h2 class="p-4">Quiz Categories</h2>
            </div>
            @if($categories->count()>0)
            @foreach($categories as $category)
            <div class=" px-4 py-2 text-xl bg-white max-w-sm  mx-auto space-x-4 rounded-2xl shadow-2xl m-6 text-gray-700 text-center">
                <span class="text-gray-800 text-xl">{{$category->name}}</span> 
                <span class="text-sm bg-blue-600 px-4 py-2 text-white rounded-xl">
                    <a href="{{url('/student/quizzes/'.$category->id)}}">View Quiz</a>
                </span>
            </div>
            @endforeach
            @else
            <div class="bg-yellow-100 text-yellow-700 p-4 rounded-xl text-xl text-center m-4">
                No category available.
            </div>
            @endif
        </div>
    </x-slot>
</x-layout>