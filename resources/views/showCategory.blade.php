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
    
    <div class="container border border-1 mt-3">
        <h3 class="m-3">{{$category->categoryName}}</h3>
     </div>
     <div class="container border border-1 mt-3">
        @forelse ($category->posts as $post)
       <h5 class="text-secondary">Posts:</h5>
       <div class="border border-2 m-2">
       <h3 class="ms-2">{{$post->title}}</h3>
       <h6 class="ms-2">-{{$post->description}}</h6>
       </div>
       <div class="d-flex flex-row">
       </div>
       @empty 
       <h2 class="m-2 text-secondary">There are no posts !</h2>
       @endforelse
     </div>

</body>
</html>