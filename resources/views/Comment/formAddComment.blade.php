{{-- @if ($errors -> any())
<ul>
    @foreach ($errors -> all() as $error)
<li>{{$error}}</li>
        
    @endforeach
</ul>
    
@endif --}}


<div class="container">
        <form action="{{route('comment.store')}}" method="POST">
                @csrf
                
            <input type="text" name="com" >
            
            
                <button type="submit" class="btn btn-success">Save</button>
            </form>
</div>
