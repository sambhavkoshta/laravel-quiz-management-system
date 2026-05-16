<h1>Change password</h1>
<form action="{{url('/change-password/'.$student->id)}}" method="post">
    @csrf
    <input type="password" name="pas" value="{{old('password',$student->password)}}"><br><br>
    <input type="password" name="email"><br><br>
    <button type="submit">Update</button>
</form>