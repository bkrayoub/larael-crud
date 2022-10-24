@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="{{url('update/'.$promotion->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" value="{{$promotion->name}}" name="name">
        <button type="submit">Update</button>
    </form>
</body>
</html>

