<link rel="stylesheet" href="css/app.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<a href="{{route('comment.create')}}" class="btn btn-success">Add</a>
<div class="container">
        <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Comment</th>
            <th>Action</th>
        </tr>
        @foreach ($comment as $item)
        <tr>
        <td>{{$item ->id}}</td>
        <td>{{$item ->comment}}</td>
        <td>
        <a href="{{route('comment.show',$item ->id)}}" class="btn btn-success">Edit</a>
        
        {{-- <form action="{{route('comment.destroy',$item ->id)}}" method="POST"><button type="submit" class="btn btn-danger">delete</button>
            @method('delete')
            @csrf
        </form> --}}

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Delete
          </button>
        
          <!-- The Modal -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Modal Heading</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  Modal body..
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  
         <form action="{{route('comment.destroy',$item ->id)}}" method="POST"><button type="submit" class="btn btn-danger">delete</button>
            @method('delete')
            @csrf
        </form> 
                </div>
                
              </div>
            </div>
          </div>
        </td>
        </tr>
        @endforeach
        
    </table>

</div>
