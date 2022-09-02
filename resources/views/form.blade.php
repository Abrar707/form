<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body class="form">
    <form action="{{$url}}" method="post">
        @csrf
        <h3>{{$title}}</h3>
        <label >Enter Name:</label>
        <input type="text" name="name" placeholder="enter name here"  value="{{$uni->name==is_null($uni->name)?old('name'):$uni->name}}">
        <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
        </span>
        <br>
        <label >Enter uni:</label>
        <input type="text" name="uni" placeholder="enter university name here"  value="{{$uni->uni==is_null($uni->uni)?old('uni'):$uni->uni}}"><span class="text-danger">
            @error('uni')
            {{$message}}
            @enderror
        </span><br>
        <label >Enter department:</label>
        <input type="text" name="department" placeholder="enter department name here"  value="{{$uni->department==is_null($uni->department)? old('department'):$uni->department}}"><span class="text-danger">
            @error('department')
            {{$message}}
            @enderror
        </span><br>
        <label >Enter password:</label>
        <input type="password" name="password" placeholder="enter password here" value="{{$uni->password==is_null($uni->password)?old('password'):$uni->password}}"><span class="text-danger">
            @error('password')
            {{$message}}
            @enderror
        </span><br><label >Enter city:</label>
        <input type="text" name="city" placeholder="enter your city here" value="{{$uni->city == is_null($uni->city) ? old('city'): $uni->city}}" ><span class="text-danger">
            @error('city')
            {{$message}}
            @enderror
        </span><br>

        <input type="submit">

    </form>
</body>
</html>
