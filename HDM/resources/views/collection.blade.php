


<style>

.header{
    position: sticky;
    top:0;
}
.footer{
    position: sticky;
    bottom:0px;
}

#carouselExampleControls {
    background-color : grey;

}

#carousel-image
    {
        border-style: dotted dashed solid double;
    }

#carousel-inner{
    text-align: center;


}

</style>



<!-- !!!!!! PLEASE DO NOT ERASE I AM USING THIS FOR TESTING. TANKS :) (GOKDAG) !!!!! -->
<!-- @foreach($products as $product)
        <p>{{$product->product_name}}</p>
        <form action="" method="GET">
        @csrf
        <input name="addToCart" value="{{$product->product_id}}" type="hidden">
        <button type="submit">add</button>
        </form>
@endforeach
-->

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<header class="header">
    <h1>HEADER</h1>
</header>
<!-- Carousel -->
<!-- Indicatiors -->
$products = $request->session()->pull('products', $products );

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 <ol class="carousel-indicators">
    @foreach($products as $product)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
    @endforeach
</ol>

<!-- Content -->

<div id="carousel-inner" class="carousel-inner" role="listbox">
<p>Coup de coeur</p>
    @foreach($products as $product)
        <div id="carousel-item" class="carousel-item {{ $loop->first ? 'active' : '' }}">
        <form action="" method="GET">
            <p><img  height="100px" width="100px" id="carousel-image"   src="{{ URL::asset($product->image)}}" ></p>
            <p>{{$product ->product_type}}</p>
            <p>{{$product->product_name}}</p>
            <p>{{$product->price}}</p>
            <p>{{$product->product_id}}</p>
            @csrf
        <input name="addToCart" value="{{$product->product_id}}" type="hidden">
        <button type="submit">add</button>
        </form>
        </div>
    @endforeach
</div>

<!-- Left arrow -->
<a id="carouselController" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<!-- Right arrow -->
<a id="carouselController" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>

<footer>
    <h1 class="footer">FOOTER</h1>
</footer>
