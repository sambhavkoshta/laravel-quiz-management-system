<h1>Edit Profile</h1>
<form action="{{url('/edit/'.$id)}}" method="post">
    @csrf
    <input type="text" name="username" value="{{old('username',$student->username)}}">
</form>