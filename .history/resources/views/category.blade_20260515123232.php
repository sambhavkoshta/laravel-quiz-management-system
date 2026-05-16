<h1>Create Category</h1>
<form action="{{url('/categories/add')}}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter Username"><br>
    <input type="email" name="email" placeholder="Enter Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Register</button>
</form>