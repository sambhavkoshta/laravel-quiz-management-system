<x-layout>
    <x-slot name="main">
        <h1>Student dashboard</h1>
        
        @if (session('loginSuccess'))
        <div>
            {{ session('loginSuccess') }}
        </div>
        @endif
        
        @if (session('registeredSuccess'))
        <div>
            {{ session('registeredSuccess') }}
        </div>
        @endif
        
        @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif
        
        <div>

      
        </div>
        
    </x-slot>
</x-layout>