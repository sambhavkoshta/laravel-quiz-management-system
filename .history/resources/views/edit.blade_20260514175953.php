<h1>Edit Profile</h1>
<form action="{{url('/edit/'.$student)}}" method="post">
    @csrf
    <input type="text" name="username" value={{old()}}>
</form>