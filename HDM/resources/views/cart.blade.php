<?php // var_dump(session()->get('basket'));?>
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
                        <div class="col-3 shadow  mb-5 bg-white rounded mobilepicturecart">
                            <img height="150px" width="150px" src="{{$value->image}}" alt="product image">
                        </div>
                        <div class="col-8 border-top border-bottom border-dark rightCart position-relative">
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
                                    @if(Auth::check())
                                    <button class="button1 button2" type="submit">remove</button>
                                    @endif
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @if ($cart == null)
                <h2>There is nothing to show</h2>
            @else
                <h2 class="cartTotal">TOTAL:<?php echo ' € ' . $total ; ?></h2>
            @endif
        </div>
    @endif

</div>
@include('Layouts/footerTemplate')
</div>
</body>
