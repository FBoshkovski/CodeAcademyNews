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
  <x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>


<h1 class="m-5 mb-3 fs-2">Posts:</h1>    

<a href="/posts/create" class="btn btn-secondary ms-5">Add Post</a>
<a href="/categories/create" class="btn btn-secondary ms-5">Add Category</a>


@foreach ($categories as $category)
  <div class="container mt-4">
    <div class="border border-1 text-secondary m-2">
      <h2 class="m-3"><a href="/categories/{{$category->id}}">{{$category->categoryName}}</a></h2>
    </div>
  </div>
@endforeach

@foreach($posts as $post)
 <div class="container mt-4">
   <div class="border border-1 m-2 text-secondary">
   <h3 class="m-2 p-2"><a class="text-decoration-none text-dark" href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
   <div class="">
    <h5 class="m-2">- {{ $post->description }}</h5>
    </div>
   </div>
 </div>
@endforeach 

</x-app-layout>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>