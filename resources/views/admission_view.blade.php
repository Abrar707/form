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
    <table class="table">
        <thead>
            <tr>
                <th>name</th>
                <th>f_name</th>
                <th>adress</th>
                <th>DOB</th>
                <th>password</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uni as $item )
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->f_name}}</td>
                <td>{{$item->adress}}</td>
                <td>{{$item->DOB}}</td>
                <td>{{$item->password}}</td>
                <td><a href="{{url('/delete')}}/{{$item->id}}"><button>delete</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
