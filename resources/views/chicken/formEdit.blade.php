<form action="{{route('chicken.update',$chicken->id)}}" method="POST">
    @method('PUT')
    @csrf
<input type="text"  name="agge" value="{{$chicken->agg}}">
    <button type="submit">update</button>
</form>