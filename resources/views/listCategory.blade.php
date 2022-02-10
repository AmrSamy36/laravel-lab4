<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
    <h2>categories Tables</h2>
    <h2>for creating your own category please click <a href="/create">Here</a></h2>
  
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td><a href="/delete/{{$category->id}}">delete</a></td>
            <td><a href="/update/{{$category->id}}">edit</a></td>

        </tr>
        @endforeach
</body>
</html>