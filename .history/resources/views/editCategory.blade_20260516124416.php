<h1>Edit Profile</h1>
<form action="{{url('/categories/update/'.$category->id)}}" method="post">
    @csrf
    <input type="text" name="name" value="{{old('category',$category->name)}}"><br><br>
    <button type="submit">Update</button>
</form>