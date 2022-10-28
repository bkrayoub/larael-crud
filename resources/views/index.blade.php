<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <style>
    </style>
</head>
<body>
    

            <div id="popsec">  

                <h2 id="addApper">
                    <a><img src="/img/plus.svg" width="40px" style="opacity: 50%"></a>
                </h2>
                
                <img src="/img/searche.svg" width="40px" onclick="showSearch()">

                <select name="" id="select" onchange="select()">
                    <option value="" hidden>There is no promotion selected</option>
                        @foreach ($promotion as $row)
                            <option value="{{$row->id}}">{{$row->Promo_name}}</option>
                        @endforeach
                    <option value="add" style="color: rgb(44, 149, 6)">Add new promotion</option>
                </select>

                <input type="text" name="search" style="display: none" id="search" placeholder="Search in current promotion">
                
                <div id="managePromotion">
                    <p><img src="/img/setting.svg" width="40px" alt="Manage promotion" style="opacity: 50%"></p>
                    
                </div>
            </div>

            <div id="container">
                <div id="table">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach ($apper as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->firstName}}</td>
                                    <td>{{$row->lastName}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>
                                        
                                        
                                        <a href="editApperPage/{{$row->id}}"><img src="img/edit.png" width="40px"></a>
                                        <a href="deleteApper/{{$row->id}}}" style="color: darkred;"><img src="img/delete.png" width="40px"></a>
                                    </td>
                                    <td class="line"></td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    
    <script src="index.js"></script>
</body>
</html>