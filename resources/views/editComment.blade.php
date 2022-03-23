<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Comment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <body>
        <div class="container">
        <form class="mt-5 d-flex flex-column" method="POST" action="/comments/{{$comment->id}}">
            @method('PUT')
    
            @csrf
            <label for="Comment">Comment:</label>
            <input  class="m-2 p-2" type="text" name="body" value="{{ $comment->body }}">
            <div><input class="p-2 btn btn-secondary" type="submit" name="Submit" value="Update"></div>
            <div><a href="/posts" class="mt-2 p-2 btn btn-danger">Cancel</a></div>
        </form>
        </div>
    </body>
    </html>
</body>
</html>