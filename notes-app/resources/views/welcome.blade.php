<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes- App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <div class="container  text-white">
        <h1 class="text-center">Notes App</h1>

        <form action="{{url('/')}}/add" class="mt-5 " method="post" >
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="desc" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {{-- <a href="/add" class="btn btn-primary">Submit</a> --}}
          </form>
    </div>
 
    <div class="container text-white mt-5">
      <div class="row">
        <div class="col-6">
          <table class="table table-bordered table-striped">
            <tr>
              <th>id</th>
            <th>title</th>
            <th>Description</th>
            <th>View</th>
            <th>Update</th>
            <th>Delete</th>
            </tr>
            @foreach ($data as $item)
                <tr>
                  <td>{{$item->id}}</td>   
                  <td>{{$item->title}}</td>   
                  <td>{{$item->content}}</td>  
                  <td><a href="{{ route('note',$item->id) }}" class="btn btn-primary btn-sm">View</a></td>  
                  <td><a href="{{ route('updatepage',$item->id) }}" class="btn btn-primary btn-sm">Update</a></td>  
                  <td><a href="{{ route('delete',$item->id) }}" class="btn btn-primary btn-sm">Delete</a></td>  
                </tr>
            @endforeach
          </table>
          <div class="mt-5 text-white">
            {{ $data->links()}}
          </div>
        </div>
      
      </div>

      
    </div>

 @stack('bootstrap')
</body>
</html>