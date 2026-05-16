<x-navbar></x-navbar>
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

<p>Welcome {{session('student')->username}}</p>

<a href="{{url('/edit'.session('student')->username)}}">Logout</a>

<a href="{{url('/logout')}}">Logout</a>