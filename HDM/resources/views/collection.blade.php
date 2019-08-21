<!DOCTYPE html>
<html lang="en">
    <head>
    @include('Layouts/headerTemplate')

    <title>Collection</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <link rel="stylesheet"  href="css/collection.css"/>
</head>
<body>

<div id="container-fluid" class="container-fluid">
  <div  class="row">

    @foreach($products as $product)
        <div id="cards" class="col-md-4">
            <img height="150" id="carousel-image" src="{{ URL::asset($product->image)}}" >
        <div id="itemcarddiv">
            <div>
                <form action="/admin/product/{{$product->id}}/edit" method="GET">
                    @csrf
                    <input name="addToCart" value="{{$product->id}}" type="hidden">
                    <button class ="button1 button2" type="submit">edit</button>
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










</body>
@include('Layouts/footerTemplate')



