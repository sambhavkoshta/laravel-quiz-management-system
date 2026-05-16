<h1>Student dashboard</h1>

@if (session('loginSuccess'))
<div class="alert alert-success" style="padding: 12px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; margin-bottom: 20px;">
    {{ session('loginSuccess') }}
</div>
@endif

<p>Welcome {{session('student')->username}}</p>

<a href="{{url('/logout')}}">Logout</a>