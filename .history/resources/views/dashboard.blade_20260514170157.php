<h1>Student dashboard</h1>

@if()

<p>Welcome {{session('student')->username}}</p>

<a href="{{url('/logout')}}">Logout</a>