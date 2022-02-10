<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
</head>
<body>
    <h2>Articales Tables</h2>
    <h2>for creating your own Articale please click <a href="/create">Here</a></h2>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Details</td>
            <td>Action</td>
        </tr>
        @foreach ($articales as $articale)
        <tr>
            <td>{{ $articale->id }}</td>
            <td>{{ $articale->name }}</td>
            <td>{{ $articale->details }}</td>
            <td><a href="/delete/{{$articale->id}}">delete</a></td>
            <td><a href="/update/{{$articale->id}}">edit</a></td>
<!-- ///delete/{{$articale->id}} -->
        </tr>
        @endforeach
</body>
</html>