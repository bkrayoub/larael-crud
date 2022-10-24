
<table id="data">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Actoin</th>
    </tr>
    @foreach ($data as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>
            <a href="edit/{{$row->id}}">Edit</a>
            <a href="delete/{{$row->id}}" style="color: darkred">Delete</a>
        </td>
    </tr>
    @endforeach

</table>