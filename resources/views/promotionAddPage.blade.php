<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Add Promotion</h2>
    <form action="addPromotion" method="GET">
        @csrf
        <input type="text" name="name" placeholder="Promotion name">
        <button>Add</button>
    </form>

</body>
</html>