<a href="{{route('chicken.create')}}">Add</a>
<table>
    <tr>
        <th>ID</th>
        <th>Agg</th>
        <th>Action</th>
    </tr>
    @foreach ($chicken as $item)
        <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->agg}}</td>
        <td>
        <a href="{{route('chicken.show',$item->id)}}">edit</a>
        <form action="{{route('chicken.destroy',$item->id)}}" method="POST"><button type="submit">delete</button>
            @method('delete')
            @csrf
        </form>
        </td>
        </tr>
    @endforeach
</table>

