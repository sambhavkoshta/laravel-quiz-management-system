<h1>Register</h1>
<form action="{{url('/register')}}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Register</button>
</form>