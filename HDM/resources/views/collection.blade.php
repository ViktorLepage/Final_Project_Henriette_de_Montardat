<!DOCTYPE html>
<html lang="en">
    <head>
@include('Layouts/headerTemplate')

<title>Collection</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<link rel="stylesheet"  href="css/lightslider.css"/>
<style>
ul{
    list-style: none outside none;
    padding-left: 0;
    margin: 0;
}
.mainslider {
    margin-bottom: 60px;

}
.content-slider li{
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
    text-align: center;
    color: #FFF;
}
.content-slider h3 {
    margin: 0;
    padding: 70px 0;
}
.mainslider{
    width: 800px;
    margin:auto;
    padding-top:1%;
}

img {
    width:200px;
    height:200px;
}

.itemcard{
    padding-top: 5px;
    padding-bottom: 5px;
}

.button {
    background-color: #403ead;
    border: none;
    color: white;
    padding: 8px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 22px;
    cursor: pointer;
    border-radius: 30%;
}

.button2:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->'
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<script src="js/lightslider.js"></script>
<script>
        $(document).ready(function() {
        $("#content-slider").lightSlider({
            loop:true,
            keyPress:true
        });
        $('#image-gallery').lightSlider({
            gallery:true,
            item:1,
            thumbItem:9,
            slideMargin: 0,
            speed:500,
            auto:true,
            loop:true,
            onSliderLoad: function() {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
    });
    </script>
</head>
<body>
	<div class="mainslider">
        <div class="item" id="item">
            <ul id="content-slider" class="content-slider">
            @foreach($products as $product)
                <li class="itemcard">
                    <img  id="carousel-image" src="{{ URL::asset($product->image)}}" >
                    <p>{{$product->product_name}}</p>
                    <form action="" method="GET">
                      @csrf
                      <input name="addToCart" value="{{$product->id}}" type="hidden">
                     <button class ="button button2" type="submit">add</button>
                    </form>
                </li>
            @endforeach
            </ul>
        </div>
    </div>

</body>
@include('Layouts/footerTemplate')



