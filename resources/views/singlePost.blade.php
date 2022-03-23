<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <a href="/posts" class="btn btn-secondary ms-5 mt-5 border border-1"> < Go back</a>

    <div class="container border border-1 mt-3">
       <h3 class="m-3">{{$post->title}}</h3>
       <h5 class="m-3">{{$post->description}}</h5>
    </div>
    <div class="container border border-1 mt-3">
      <h5 class="text-secondary">Comments:</h5>
      @foreach ($post->comments as $comment)
      <h6 class="ms-2">{{$comment->body}}</h6>
      <div class="d-flex flex-row">
      <a href="/comments/{{$comment->id}}/edit" class="btn btn-secondary me-1">Edit</a>
      <form action="/comments/{{$comment->id}}" method="POST" class="">
        @csrf
        @METHOD('DELETE')
        <input class="btn btn-danger" type="submit" name="submit" value="Delete">
      </form>
      </div>
      @endforeach
    </div>

    <div class="container d-flex">
    <div class="mt-4 btn btn-primary me-2">
      <a href="/comments/{{$post->id}}" class="text-decoration-none text-light">Add Comment</a>
    </div>
    <div class="mt-4 btn btn-secondary">
      <a href="/posts/{{$post->id}}/edit" class="text-decoration-none text-light">Edit Post</a>
    </div>
    <form action="/posts/{{$post->id}}" method="POST" class="mt-4 ms-2">
      @csrf
      @METHOD('DELETE')
      <input class="btn btn-danger" type="submit" name="submit" value="Delete Post">
    </form>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>