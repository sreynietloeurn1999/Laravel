@if ($errors -> any())
<ul>
    @foreach ($errors -> all() as $error)
<li>{{$error}}</li>
        
    @endforeach
</ul>
    
@endif
<form action="insertData" method="POST">

    @csrf
    
    <input type="text" name="fname" placeholder="fname" >
    
    <input type="text" name="lname" placeholder="lname" > 
  
    <input type="number" name="age" placeholder="age">

    <button type="submit">Save</button>
</form>