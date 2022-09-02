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
    <a href="{{url('/student/create')}}"><button>Add Detail</button></a>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Adress</th>
            <th>password</th>
            <th>Delete</th>
            <th>Edit</th>
        </thead>
        <tbody>
            @foreach ($customer as $item )
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->adress}}</td>
                <td>{{$item->password}}</td>
                <td><a href="{{url('/student/delete')}}/{{$item->id}}"><button class="btn btn-danger">Delete</button></a>
                </td>
                <td><a href="{{route('data.edit',['id'=>$item->id])}}"></a><button btn btn-Success>Edit</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
