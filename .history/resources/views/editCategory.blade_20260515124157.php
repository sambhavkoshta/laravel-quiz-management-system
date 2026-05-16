<h1>Edit Profile</h1>
<form action="{{url('/categories/edit/'.$category->id)}}" method="post">
    @csrf
    <input type="text" name="username" value="{{old('username',$category->username)}}"><br><br>
    <button type="submit">Update</button>
</form>