<table>
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
    </tr>
    @foreach ($student as $eachStudent)
        <tr>
        <td>{{$eachStudent -> id}}</td>
        <td>{{$eachStudent -> Firstname}}</td>
        <td>{{$eachStudent -> Lastname}}</td>
        <td>{{$eachStudent -> Age}}</td>
        </tr>
    @endforeach
</table>