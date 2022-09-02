<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <form action={{$url}} method="post">
        <h2>{{$title}}</h2>
        @csrf
        <label>Name</label>
        <input type="text" name="name" value="{{$customer->name==is_null($customer->name)?old('name'):$customer->name}}">
        <label>adress</label>
        <input type="text" name="adress" value="{{$customer->adress==is_null($customer->adress)?old('name'):$customer->adress}}">
        <input type="submit">
    </form>
</body>
</html>
