<h1>Create Category</h1>
<form action="{{url('/categories/add')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Catrgory Name"><br>
    <button type="submit">Add</button>
</form>

<div>
    @foreach($category as $c)
    <div style="display: flex; padding: 10px;">
        <div style="margin:5px">{{$c->name}}</div>
        <div style="margin:5px"><a href="{{url('/categories/edit/'.$c->id)}}">Edit</a></div>
        <div style="margin:5px"><a href="{{(/categories/delete/{id})}}"></a>Delete</div>
    </div>
    @endforeach
</div>