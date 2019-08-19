

<!-- !!!!!! PLEASE DO NOT ERASE... I AM USING THIS FOR TESTING. TANKS :) (GOKDAG) !!!!! -->
<!-- @foreach($products as $product)
        <p>{{$product->product_name}}</p> -->
        <!-- //---THIS FORM IS FOR "ADD TO CART" BUTTON -->
        <!-- <form action="" method="GET">
        @csrf
        <input name="addToCart" value="{{$product->id}}" type="hidden">
        <button type="submit">add</button>
        </form>
@endforeach -->

<style>
#carousel-image{
    border-style: dotted dashed solid double;
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
}

#carousel-inner{
    text-align: center;
}
.carousel-item{
    width: 500px;
    height: 380px;
}

#carouselController{
    background-color : #403ead;
    height : 50%;
}

.carousel-item img{
    height: 200px;
}

.carousel-control-prev-icon{
    background-color : #403ead;
}

.button1 {
  height: 40px;
  width: 150px;
  border: 2px solid #403ead;
  margin: 20px 20px 20px 20px;

  text-transform: uppercase;
  text-decoration: none;
  font-size: .8em;
  letter-spacing: 1.5px;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.button {
  display: inline-flex;

}







</style>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<header class="header">
@include('Layouts/headerTemplate')
</header>
<!-- Carousel -->
<!-- Indicatiors -->

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
    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
        <img   id="carousel-image" src="{{ URL::asset($product->image)}}" >
         <p>{{$product ->product_type}}</p>
         <p>{{$product->product_name}}</p>
         <p>{{$product->image}}</p>
        <form action="" method="GET">
        @csrf
        <input name="addToCart" value="{{$product->id}}" type="hidden">
        <button class="button1 button2" type="submit">add</button>
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
@include('Layouts/footerTemplate')
</footer>






