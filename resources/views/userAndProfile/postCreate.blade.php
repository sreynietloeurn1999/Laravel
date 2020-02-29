

<form action="{{route('addPost')}}" method="POST">
        @csrf
        
        <input type="text" placeholder="title" name="title">
        <input type="text" placeholder="body" name="body">
        <input type="text" placeholder="userId" name="userid">
    
        <button type="submit">Save</button>
    </form>