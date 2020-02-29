<form action="{{route('chicken.store')}}" method="POST">
    @csrf
    <input type="text" placeholder="agg" name="agge">
    <button type="submit">Save</button>
</form>