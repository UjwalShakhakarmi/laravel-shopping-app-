<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('editlist')}}" method="post">
        @csrf
        <input type="text" name="edited"  value={{$value->lists}}>
        <input type="hidden" name="id"  value={{$value->id}}>
        <button>Submit</button>
    </form>
</body>
</html>