@if ($errors -> any())
<ul>
    @foreach ($errors -> all() as $error)
<li>{{$error}}</li>
        
    @endforeach
</ul>
    
@endif
<form action="{{route('student.store')}}" method="POST">
    @csrf
    
<input type="text" name="fname" >
<input type="text" name="lname"  > 
  
<input type="number" name="age" >

    <button type="submit">Save</button>
</form>