<h1>Student dashboard</h1>

@session('loginSuccess')

<p>Welcome {{session('student')->username}}</p>

<a href="{{url('/logout')}}">Logout</a>