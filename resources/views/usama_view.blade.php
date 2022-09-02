<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url('create')}}"><button>Add</button></a>
<table>
    <thead>
        <th>Name</th>
        <th>Adress</th>
        <th>Delete</th>
        <th>Edit</th>
    </thead>
    <tbody>
        @foreach ($customer as $item )
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->adress}}</td>
            <td><a href="{{url('/delete')}}/{{$item->id}}"><button>delete</button></a></td>
            <td><a href="{{route('data.edit',['id'=>$item->id])}}"><button>Edit</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
