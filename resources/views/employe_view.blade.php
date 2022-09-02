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
        <thead><tr>
            <th>Name</th>
            <th>Adress</th>
            <th>Email</th>
            <th>Password</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $customer as $item )


            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->adress}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->password}}</td>
                <td> <a href="{{url('/delete')}}/{{$item->id}}"><button>Delete</button></a></td>
                <td><a href="{{url('/edit')}}/{{$customer->id}}"></a><button>edit</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
