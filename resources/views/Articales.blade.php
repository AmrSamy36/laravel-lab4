<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create articale</title>
</head>
<body>
    <p> Create Articales page </p>
    <form method="POST" action="{{ route('articale.save') }}">
        @csrf
        Name: <input type="text" name="name">
        Details: <input type="text" name="Details">
        <button>submit</button>
    </form>
</body>
</html>