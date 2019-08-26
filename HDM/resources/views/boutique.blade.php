<?php //echo '<pre>'; var_dump(Request()->session()); echo '</pre>'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/boutique.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <!-- Header.php -->
    @include('Layouts/headerTemplate')
        <div id="pageContainer">
            <div id="contentWrap">
            <!-- !!!!!! PLEASE DO NOT ERASE... I AM USING THIS FOR TESTING. THANKS :) (GOKDAG) !!!!! -->
            <!-- @foreach($products as $product)
                    <p>{{$product->product_name}}</p> -->
                    <!-- //---THIS FORM IS FOR "ADD TO CART" BUTTON -->
                    <!-- <form action="" method="GET">
                    @csrf
                    <input name="addToCart" value="{{$product->id}}" type="hidden">
                    <button type="submit">add</button>
                    </form>
            @endforeach -->
                <!-- Carousel -->
                <!-- Indicatiors -->

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <!--
                <ol class="carousel-indicators">
                    @foreach($products as $product)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
-->
                <!-- Content: displying the images on bootstrap's carousel -->
                <div id="carousel-inner" class="carousel-inner" role="listbox">
                <p>Coup de coeur</p>
                    @foreach($products as $product)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img   id="carousel-image" src="{{ URL::asset($product->image)}}" >
                        <div id="boutiqueDetailsButton">
                            <div id="boutiqueButton">
                            <!--If user is not legged in add button is not shown-->
                                @if(Auth::check())
                                    <form action="" method="GET">
                                        @csrf
                                        <input name="addToCart" value="{{$product->id}}" type="hidden">
                                        <button class="button1 button2" type="submit">add</button>
                                    </form>
                                    <div id="infoAdded"></div>
                                @endif
                            </div>
                            <div id="boutiqueDeails">
                                <div id="producttype"><p>{{$product ->product_type}}</p></div>
                                <div id="productnameprice">
                                    <div><p>{{$product->product_name}}</p></div>
                                    <div><p>&euro;{{$product->price}}</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Left arrow -->
                <a id="carouselController" class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark round-3" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <!-- Right arrow -->
                <a id="carouselController" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark round-3" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>

</div>
<!--footer.php-->

</div>
@include('Layouts/footerTemplate')
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
    //AJAX CALL FOR ADDING ITEMS TO THE CART(GOKDAG)
$(function(){
    $('button[type="submit"]').click(function(e){
        e.preventDefault();
        console.log(e.target.parentElement.querySelector('input[name="addToCart"]').value);
        $.ajax({
            data:    {
            "_token": "{{ csrf_token() }}",
            "addToCart": e.target.parentElement.querySelector('input[name="addToCart"]').value
            },
            url: '/boutique',
            type: 'GET',
            success: function(result) {
                // $('#infoAdded').html('<div>added</div>');
            },
            error: function(err){
                // Si une erreur AJAX se produit
            }
        });
    });
});
</script>
</body>
</html>








