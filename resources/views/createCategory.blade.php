<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form class="m-5 d-flex flex-column" method="POST" action="/categories">

        @csrf
        <label for="categoryName">Category Name:</label>
        <input  class="m-2 p-2" type="text" name="categoryName">
        <div><input class="p-2 btn btn-secondary" type="submit" name="Submit" value="Create Category"></div>
        <div><a href="/categories" class="p-2 btn btn-danger mt-2">Go back</a></div>
    </form>
    </div>
</body>
</html>