<h1>Change password</h1>
<form action="{{url('/change-password/'.$student->id)}}" method="post">
    @csrf
    <input type="currpassword" name="password"><br><br>
    <input type="password" name="newpass"><br><br>
    <button type="submit">Update</button>
</form>