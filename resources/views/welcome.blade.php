


<h2><a href="/add">Add Promotoin</a></h2>
<input type="text" name="search" id="search">

<table id="data">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Actoin</th>
    </tr>
    @foreach ($promotion as $row)
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

<script src="{{ URL::asset('js/search.js')}}"></script>
