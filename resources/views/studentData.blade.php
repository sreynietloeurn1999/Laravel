<table>
    <a href="showForm">Add Student</a>
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
            <a href="updateform">edit</a>
            <a  href="{{route('delete',$eachStudent->id)}}"><button onclick="return confirm('Are you sure?')">Delete</button></a>

        </td>
        </tr>
    @endforeach
</table>