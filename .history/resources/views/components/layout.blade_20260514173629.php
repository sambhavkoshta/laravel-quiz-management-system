<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        @if(session('student'))
        <div>Dashboard</div>
        <div>Logout</div>
        @else
        <div>Login</div>
        
    </nav>
</body>
</html>