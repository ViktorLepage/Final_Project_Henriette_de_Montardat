<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  href="css/cart.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<div id="pageContainer">
    <div id="contentWrap">
<header>
@include('Layouts/headerTemplate')
</header>



</body>
</html>
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
                                <form action="" method="GET">
                                @csrf
                                <input name="addToCart" value="{{$value->id}}" type="hidden">
                                <button class="button1 button2" type="submit">remove</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
          <p class="cartTotal">TOTAL:<?php echo ' € ' . $total ; ?></p>
    </div>

@endif

    </div>
    <footer id="footer">
@include('Layouts/footerTemplate')
</footer>
</div>
