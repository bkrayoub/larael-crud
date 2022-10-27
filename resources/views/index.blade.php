<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        th,td {
            border: .5px #000 solid;
            margin: 0;
        }
    </style>
</head>
<body>
    <center>

            <div>  

                <h2 id="addApper">
                    <a>Select promotion</a>
                </h2>

                <span>search</span>

                <select name="" id="select" onchange="select()">
                    <option value="" hidden>There is no promotion selected</option>
                        @foreach ($promotion as $row)
                            <option value="{{$row->id}}">{{$row->Promo_name}}</option>
                        @endforeach
                    <option value="add">Add new promotion</option>
                </select>

                <input type="text" name="search">
                
                <div id="managePromotion">
                    <p>Select promotion </p>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($apper as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->firstName}}</td>
                            <td>{{$row->lastName}}</td>
                            <td>{{$row->email}}</td>
                            <td>
                                <a href="editApperPage/{{$row->id}}">Edit</a>
                                <a href="deleteApper/{{$row->id}}}" style="color: darkred;">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </center>
    <script src="index.js"></script>
</body>
</html>