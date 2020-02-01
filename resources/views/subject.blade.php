
<table>
    <tr>
        <th>name</th>
        <th>score</th>
    </tr>
    @foreach ($subjects as $item)
    <tr>
        <td>{{$item[0]}}</td>
        <td>   {{$item[1]}}</td>
    </tr>
    @endforeach
</table>
    
    
 
