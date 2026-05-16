@if (session('logoutSuccess'))
<div>
    {{ session('logoutSuccess') }}
</div>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<h1>Login</h1>
<form action="{{url('/login')}}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Login</button>
</form>