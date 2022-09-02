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
    <title>Trash Data</title>
    <a href="{{url('view')}}"><button class="btn btn-success">All Data page</button></a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>uni</th>
                <th>department</th>
                <th>password</th>
                <th>city</th>
                <th>Trash</th>
                <th>Edit</th>

            </tr>
        </thead>
        <tbody>
            @foreach ( $uni as $item )


            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->uni}}</td>
                <td>{{$item->department}}</td>
                <td>{{$item->password}}</td>
                <td>{{$item->city}}</td>
                <td>
                    <a href="{{url('/force_delete')}}/{{$item->id}}"><button class="btn btn-danger">Permanently Delete</button></a></td>

                    <td><a href="{{url('/restore')}}/{{$item->id}}"><button class="btn btn-success">Restore</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        {{$uni->links()}}
    </div>
</body>
</html>
