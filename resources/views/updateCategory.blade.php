<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('categories.edit') }}" method="post"> 
    @csrf
    <input type="hidden" name="id" value="<?php echo $category->id?>" >

    Name:<input type="text" name="name" value="<?php echo $category->name?>">
   
    <input type="submit"  value="update" name="update">
</form>
</body>
</html>