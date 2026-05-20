<x-layout>
    <x-slot name="main">
        <div class="min-h-screen bg-gray-100 rounded-2xl m-4">
            <div class="max-w-6xl mx-auto space-y-8 p-4">

                @if (session('loginSuccess'))

                <div class="bg-green-100 text-green-700
                p-4 rounded-xl">

                    {{ session('loginSuccess') }}

                </div>

                @endif
                
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-4xl font-bold text-gray-700">
                                Admin Dashboard
                            </h1>
                            <p class="text-gray-500 mt-2">
                                Welcome back,
                                {{session('admin')->username}}
                            </p>
                        </div>
                    </div>

                </div>


                @if (session('registeredSuccess'))

                <div class="bg-green-100 text-green-700
                p-4 rounded-xl">

                    {{ session('registeredSuccess') }}

                </div>

                @endif

                @if (session('success'))
                <div class="bg-blue-100 text-blue-700
                p-4 rounded-xl">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('category'))
                <div class="bg-yellow-100 text-yellow-700
                p-4 rounded-xl">
                    {{session('category')}}
                </div>
                @endif
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h2 class="text-xl font-semibold text-gray-600">
                            Total Student
                        </h2>
                        <p class="text-5xl font-bold text-blue-600 mt-4">
                            {{$student->count()}}
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <a href="{{url('/categories')}}">
                            <h2 class="text-xl font-semibold text-gray-600">
                                Total Categories
                            </h2>
                            <p class="text-5xl font-bold text-green-600 mt-4">
                                {{$categories->count()}}
                            </p>
                        </a>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h2 class="text-xl font-semibold text-gray-600">
                            Total Quizzes
                        </h2>
                        <p class="text-5xl font-bold text-purple-600 mt-4">
                            {{$quizzes->count()}}
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 space-y-3">
                    <h2 class="text-2xl font-bold text-gray-700">
                        Admin Details
                    </h2>
                    <p>
                        <span class="font-semibold">
                            Username :
                        </span>
                        {{session('admin')->username}}
                    </p>
                    <p>
                        <span class="font-semibold">
                            Email :
                        </span>
                        {{session('admin')->email}}
                    </p>
                    <p>
                        <span class="font-semibold">
                            Joined :
                        </span>
                        {{session('admin')->created_at}}
                    </p>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>