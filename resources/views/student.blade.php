<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Admission Form:</h3>
<form action="/student/store" method="post" class="form">
    @csrf
    <label>Name</label>
    <input type="text" name="name">
    <label>adress</label>
    <input type="text" name="adress">
    <label>password</label>
    <input type="password" name="password">
    <input type="submit">
</form>
</body>
</html>
