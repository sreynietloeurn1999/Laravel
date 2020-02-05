<form action="{{route('update'),$sutdent->id}}" method="POST">
        @method('PUT')
        @csrf
        
<input type="text" name="fname" value="">
        
        <input type="text" name="lname" >
      
        <input type="number" name="age" >
    
        <button type="submit">update</button>
    </form> 

    