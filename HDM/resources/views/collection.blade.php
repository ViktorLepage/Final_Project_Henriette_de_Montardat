<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Collection</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <link rel="stylesheet" href="{{asset('css/collection.css')}}">
    </head>

<body>
<!--header.php-->
@include('Layouts/headerTemplate')

<div id="pageContainer">
    <div id="contentWrap">
<div id="container-fluid" class="container-fluid">
  <div class="row">
    <!--Dispalyaing the items on the bootstrap grid-->
    @foreach($products as $product)
        <div id="cards" class="col-6">
            <img height="150" id="carousel-image" src="{{ URL::asset($product->image)}}" >
            <div id="itemcarddiv">
                <div>
                    <form action="/admin/product/{{$product->id}}/edit" method="GET">
                        @csrf
                        <input name="addToCart" value="{{$product->id}}" type="hidden">
                        <!--Button is visible only for logged in members-->
                        @if(backpack_auth()->user())
                            <button class ="button1 button2" type="submit">edit</button>
                        @endif
                        </form>
                </div>
            <div>
              <p>{{$product->product_name}}</p>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</div>
</div>
<!--footer.php-->
@include('layouts/footerTemplate')
</body>
</html>




