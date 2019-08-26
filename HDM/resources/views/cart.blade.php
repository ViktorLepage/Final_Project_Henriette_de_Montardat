<?php // var_dump(session()->get('basket'));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/cart.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    @include('Layouts/headerTemplate')
    <div id="pageContainer">
        <div id="contentWrap">

            <!-- LOOPS THROUGH THE COLLECTION OF QUERY RESULTS AND SHOWS SELECTED ITEMS OF THE USER (GOKDAG) -->

            <!-- If the cart is not empty show the added items. (GOKDAG) -->
            @if($cart !== null)
            <?php $total = 0; ?>
            <div class="container">
                @foreach($cart as $eachCart=>$value)
                <div id="ex1" class="modal">
                    <p> <img class="modall" data-toggle="modal" id="myImg" height="150px" width="150px" src="{{$value->image}}" alt="product image"></p>

                </div>
                <div class="container mr-0">
                    <div name="cartItem" class="row">
                        <div class="col-3 shadow  mb-5 bg-white rounded mobilepicturecart">
                            <!-- Link on the img to open the modal -->
                            <a href="#ex1" rel="modal:open"><img data-toggle="modal" id="myImg" height="150px" width="150px" src="{{$value->image}}" alt="product image"></a>
                        </div>
                        <div class="col-8 border-top border-bottom border-dark rightCart position-relative">
                            <div class="d-flex justify-content-between">
                                <p>{{$value->product_name}}</p>
                                <p class="itemPrice" value="{{$value->price}}">€ {{$value->price}}</p>
                                <div id="totalPrice">
                                    <?php $total  += $value->price; ?>
                                </div>
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
                @endif

                <form action="/stripe" method="post">
                    @csrf
                    <h3 class="cartTotal">TOTAL: € {{$total}} </h3>
                    {{-- Ajax remove functionality test(GOKDAG) --}}
                    {{-- <h3 class="cartTotal">Removed Price: € {{$itemPrice[0]->price ?? "0"}} </h3> --}}
            </div>
            <input type="submit" id="pay" value="PAY">
            </form>
            @endif

        </div>
        @include('Layouts/footerTemplate')
    </div>
    {{-- This is ajax test code do not erase (GOKDAG) --}}
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>
        Stripe.setPublishableKey($form.data('stripe-publishable-key'));
    </script>
    <script>
        $('img').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })

        // THIS AJAX CALL IS FOR REMOVE FEATURE IN CART PAGE (GOKDAG)
        // $(function(){
        //     $('button[type="submit"]').click(function(e){
        //         e.preventDefault();
        //         console.log(e.target.parentElement.querySelector('input[name="removeFromCart"]').value);
        //         $.ajax({
        //             data:    {
        //             "_token": "{{ csrf_token() }}",
        //             "removeFromCart": e.target.parentElement.querySelector('input[name="removeFromCart"]').value
        //             },
        //             url: '/cart',
        //             type: 'POST',
        //             success: function(result) {
        //                 console.log(result);
        //                 // $('#resultForm').html('<div class="green">'+result+'</div>');
        //                 e.target.parentElement.closest('div[name="cartItem"]').remove();
        //                 $('.cartTotal').html('<h3 class="cartTotal">TOTAL:<?php echo " € " . $total = $total - ($itemPrice[0]->price ?? "0"); ?></h3>');
        //                 // $('#totalPrice').html('<h3 class="cartTotal">TOTAL:<?php echo " € " . $total; ?></h3>');
        //                 //take the price from controller and substract it from total//


//             },
//             error: function(err){
//                 // If there is any error...
//             }
//         });
//     });
// });
    </script>
</body>
