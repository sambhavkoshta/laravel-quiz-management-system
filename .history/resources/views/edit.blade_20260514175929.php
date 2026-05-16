<h1>Edit Profile</h1>
<form action="{{url('/edit/'.$studen)}}" method="post">
    @csrf
    <input type="text" name="username" old={{}}>
</form>