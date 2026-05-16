<h1>Edit Profile</h1>
<form action="{{url('/categories/edit/'.$category->id)}}" method="post">
    @csrf
    <input type="text" name="username" value="{{old('username',$student->username)}}"><br><br>
    <input type="email" name="email" value="{{old('email',$student->email)}}"><br><br>
    <button type="submit">Update</button>
</form>