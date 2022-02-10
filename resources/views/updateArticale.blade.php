<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('articale.edit') }}" method="post"> 
    @csrf
    <input type="hidden" name="id" value="<?php echo $articale->id?>" >

    Name:<input type="text" name="name" value="<?php echo $articale->name?>">
    Details:<input type="text" name="Details" value="<?php echo $articale->details?>">

   
    <input type="submit"  value="update" name="update">
</form>
</body>
</html>