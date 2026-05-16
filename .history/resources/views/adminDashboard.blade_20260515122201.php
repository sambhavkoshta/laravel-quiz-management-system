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

<a href="{{url('/edit/'.session('admin')->id)}}">Edit</a>

<a href="{{url('/change-password/'.session('admin')->id)}}">Change Password</a>

<a href="{{url('/admin-logout')}}">Logout</a>