<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-gray-200">
    @if (session('logoutSuccess'))
    <div>
        {{ session('logoutSuccess') }}
    </div>
    @endif
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="max-w-md bg-white">
            <h1>Login</h1>
            <form action="{{url('/login')}}" method="post">
                @csrf
                <input type="text" name="username" placeholder="Enter Username"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>