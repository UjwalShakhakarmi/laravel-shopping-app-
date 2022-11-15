<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Shopping List</h1>
    <form action="{{route('saveList')}}" method="post">
        @csrf
        <input type="text" name="lists">
        <button type="submit">Save</button>
    </form>

        <table class="table table-bordered border-primary" style="width: 350px;">
            <tr>
                <th>Sn.</th>
                <th>List</th>
                <th colspan='2'>Action</th>
            </tr>
       @foreach($List as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->List}}</td>
            <td><a href="{{url('/edit/'. $value->id)}}">edit</a></td>
            <td><a href="{{url('/delete/'. $value->id)}}">Delete</a></td>
        </tr>
       @endforeach
       </table>
</body>
</html>