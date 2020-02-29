<form action="{{route('comment.update',$comment->id)}}" method="POST">
    @method('PUT')
    @csrf
    
<input type="text" name="com" value="{{$comment ->comment}}">


    <button type="submit">Save</button>
</form>