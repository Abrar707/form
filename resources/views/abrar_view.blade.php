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
    <form action="" class="col-9" method="get">
        <input type="search" placeholder="search by name or email" name="search" value="{{$search}}">
        <button class="btn btn-primary">search</button>
        <a href="{{url('create')}}"><button class="btn btn-success" type="button">Add</button></a>
    </form>
    <a href="{{url('create')}}"><button class="btn btn-success">Add</button></a>
    <a href="{{url('trash')}}"><button class="btn btn-danger">go to Trash</button></a>
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
                    <a href="{{url('/delete')}}/{{$item->id}}"><button class="btn btn-danger">Move Trash</button></a></td>

                    <td><a href="{{route('data.edit',['id'=>$item->id])}}"><button class="btn btn-success">Edit</button></a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
   <div class="row">
    {{$uni->links()}}
   </div>
</body>
</html>
