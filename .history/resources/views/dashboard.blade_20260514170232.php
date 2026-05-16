<h1>Student dashboard</h1>

@if(@session('loginSuccess'))
<div>{{@session('loginSuccess')}}</div>
@export const functionName = (params) => {
    
};


<p>Welcome {{session('student')->username}}</p>

<a href="{{url('/logout')}}">Logout</a>