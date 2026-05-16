<h1>Change password</h1>
<form action="{{url('/change-password/'.$student->id)}}" method="post">
    @csrf
    <input type="password" name="username" value="{{old('password',$student->username)}}"><br><br>
    <input type="email" name="email" value="{{old('email',$student->email)}}"><br><br>
    <button type="submit">Update</button>
</form>