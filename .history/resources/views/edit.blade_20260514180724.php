<h1>Edit Profile</h1>
<form action="{{url('/edit/'.$student->id)}}" method="post">
    @csrf
    <input type="text" name="username" value="{{old('username',$student->username)}}">
    <input type="email" name="email" value="{{old('email',$student->username)}}">
</form>