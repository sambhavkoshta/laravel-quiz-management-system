<h1>Student dashboard</h1>

@if(@session('loginSuccess'))
<div>{{@session()}}</div>

<p>Welcome {{session('student')->username}}</p>

<a href="{{url('/logout')}}">Logout</a>