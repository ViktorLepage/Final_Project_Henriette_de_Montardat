<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  href="css/cart.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
@include('Layouts/headerTemplate')
<div id="pageContainer">
<div id="contentWrap">

<!-- LOOPS THROUGH THE COLLECTION OF QUERY RESULTS AND SHOWS SELECTED ITEMS OF THE USER (GOKDAG) -->

<!-- If the cart is not empty show the added items. (GOKDAG) -->
    @if($cart !== null)
        <?php $total=0; ?>
        <div class="container">
            @foreach($cart as $eachCart=>$value)
                <div class="container mr-0">
                    <div class="row">
                        <div class="col-4 shadow p-3 mb-5 bg-white rounded">
                            <img height="150px" width="150px" src="{{$value->image}}" alt="product image">
                        </div>
                        <div class="col-8 border-top border-bottom border-dark pl-5 rightCart position-relative">
                            <div class="d-flex justify-content-between">
                                <p>{{$value->product_name}}</p>
                                <p>€ {{$value->price}}</p>
                                <?php $total  += $value->price;?>
                            </div>
                            <div>
                                <p>{{$value->product_type}}</p>
                            </div>
                            <div class="position-absolute removeButton">
                                    <form action="" method="POST">
                                    @csrf
                                    <input name="removeFromCart" value="{{$value->id}}" type="hidden">
                                    <button class="button1 button2" type="submit">remove</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <p class="cartTotal">TOTAL:<?php echo ' € ' . $total ; ?></p>
        </div>

    @elseif($cart == null)
        <h2>There is nothing to show</h2>
    @endif

</div>
@include('Layouts/footerTemplate')
</div>
</body>
