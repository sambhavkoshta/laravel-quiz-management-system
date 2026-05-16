<h1>Admin dashboard</h1>

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

<p>Welcome {{session('admin')->username}}</p>
<p>Email : {{session('admin')->email}}</p>
<p>Created At : {{session('admin')->created_at}}</p>

<h2>Total Students</h2>

<a href="{{url('/admin-logout')}}">Logout</a>