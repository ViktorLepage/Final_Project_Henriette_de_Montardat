
<!-- LOOPS THROUGH THE COLLECTION OF QUERY RESULTS AND SHOWS SELECTED ITEMS OF THE USER (GOKDAG) -->
@foreach($cart as $eachCart=>$value)
        <p>{{$value->product_name}}</p>
        <p>{{$value->price}}</p>
@endforeach

