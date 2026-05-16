<h1>Student dashboard</h1>

@if (session('loginSuccess'))
<div>
    {{ session('loginSuccess') }}
</div>
@endif

@if (session('logoutSuccess'))
<div>
    {{ session('logoutSuccess') }}
</div>
@endif

<p>Welcome {{session('student')->username}}</p>

<a href="{{url('/logout')}}">Logout</a>