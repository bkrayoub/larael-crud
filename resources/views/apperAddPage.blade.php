<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
    <title>Document</title>
</head>
<body>
    <div id="action">
        <h1 id="promotionH1">Add student</h1>
        <form action="/addApper" method="GET" id="promotion">
            @csrf
            <label>First name:
                <input type="text" name="firstName">
            </label>
            <label>Last name:
                <input type="text" name="lastName">
            </label>
            <label>Email:
                <input type="text" name="email">
            </label>
            <input type="hidden" name="promo_id" value="{{$promotion_id}}">
            <button id="submit">Submit</button>
        </form>
    </div>
</body>
</html>