<h1>Create Category</h1>
<form action="{{url('/categories/add')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Catrgory Name"><br>
    <button type="submit">Add</button>
</form>

<div>
    @foreach($category as $c)
    <div style="display: flex; padding: 10px;">
        <div style="margin">{{$c->name}}</div>
        <div>Edit</div>
        <div>Delete</div>
    </div>
    @endforeach
</div>