
<center>
    <h2>Edit promotion</h2>
    <form action="{{url('updatePromotion/'.$promotion->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" value="{{$promotion->Promo_name}}" name="name">
        <a href="{{url('deletePromotion/'.$promotion->id)}}">Delete</a>
        <button>Update</button>
    </form>
</center>