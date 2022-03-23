<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form class="m-5 d-flex flex-column" method="POST" action="/comments/{{$post->id}}">
    
            @csrf
            <label for="title">Add comment:</label>
            <textarea class="m-2 p-2" type="text" name="Comment" ></textarea>
            <div><input class="p-2 btn btn-secondary" type="submit" name="Submit" value="Submit"></div>
            <div><a href="/posts/{{$post->id}}" class="p-2 btn btn-primary mt-2">Go back</a></div>
    </form>
    </div>
</body>
</html>