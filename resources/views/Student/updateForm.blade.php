<form action="{{route('student.update',$student->id)}}" method="POST">
        @method('PUT')
        @csrf
        
       <input type="text" name="fname" value="{{$student ->Firstname}}" >
        
        <input type="text" name="lname" value="{{$student ->Lastname}}"  >
      
        <input type="number" name="age" value="{{ $student ->Age}}" >
    
        <button type="submit">update</button>
    </form> 

    