<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Update</h1>

        <form action="{{ route('update',$data->id) }}" class="mt-5 " method="post" >
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{$data->title}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="desc"  >{{$data->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {{-- <a href="/add" class="btn btn-primary">Submit</a> --}}
          </form>
    </div>
    @stack('bootstrap')
</body>
</html>

        