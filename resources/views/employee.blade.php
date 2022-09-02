<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <form action="store" method="post" class="form">
        @csrf
        <label>Name</label>
        <input type="text" name="name"><br>
        <label>Adress</label>
        <input type="text" name="adress"><br>
        <label>email</label>
        <input type="email" name="email"><br>
        <label>password</label>
        <input type="password" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>
