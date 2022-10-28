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