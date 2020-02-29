<table>
    <a href="{{route('student.create')}}">Add Student</a>
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
    @foreach ($student as $eachStudent)
        <tr>
        <td>{{$eachStudent -> id}}</td>
        <td>{{$eachStudent -> Firstname}}</td>
        <td>{{$eachStudent -> Lastname}}</td>
        <td>{{$eachStudent -> Age}}</td>
        <td>
            {{-- <a  href="{{route('student.destroy',$eachStudent -> id)}}">Delete</a> --}}
            <a href="{{route('student.show',$eachStudent -> id)}}">edit</a>
            
        </td>
        <td>
                <form action="{{route('student.destroy',$eachStudent -> id)}}" method="POST"><button onclick="return confirm('Are you sure?')">delete</button>
                    @method('delete')
                    @csrf
                </form>
        </td>
        </tr>
    @endforeach
</table>