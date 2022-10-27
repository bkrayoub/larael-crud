<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Add promotion</h1>
        <form action="/addApper" method="GET">
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
            <button>Submit</button>
        </form>
    </center>
</body>
</html>