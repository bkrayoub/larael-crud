<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('updateApperPage/'.$apper->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="firstName" value="{{$apper->firstName}}">
        <input type="text" name="lastName" value="{{$apper->lastName}}">
        <input type="text" name="email" value="{{$apper->email}}">
        <input type="hidden" name="promo_id" value="{{$apper->promo_id}}">
        <button>Update</button>
    </form>
</body>
</html>