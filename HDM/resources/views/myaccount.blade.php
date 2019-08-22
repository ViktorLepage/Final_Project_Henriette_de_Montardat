<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Contact</title>
  </head>
<body>
@include('Layouts/headerTemplate')
<div id="pageContainer">
    <div id="contentWrap">
    <h1 class="pt-5">ACCOUNT INFORMATION</h1>
    <form id="theForm" action="/myaccount" method="POST" class="d-flex justify-content-center">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="d-flex align-items-center" >
                    <i class="fas fa-user  pb-4"></i>
                    <div class="form-group pb-4">
                    <input name="name" type="text" class="form-control border-0 rounded-0 focus" id="inputFirstName" aria-describedby="nameHelp" placeholder="votre prénom" value="{{Auth::user()['name']}}">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="surname" type="text" class="form-control border-0 rounded-0" id="inputLastName" aria-describedby="lastNameHelp" placeholder="votre nom" value="{{Auth::user()['surname']}}">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="email" type="email" class="form-control border-0 rounded-0" id="inputEmail" aria-describedby="emailHelp" placeholder="email" value="{{Auth::user()['email']}}">
                    </div>
                </div>
                <!-- <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="password" type="password" class="form-control border-0 rounded-0" id="inputPassword" placeholder="password" >
                    </div>
                </div> -->
                <div class="d-flex align-items-center">
                    <i class="fas fa-user"></i>
                    <div class="form-group">
                        <input name="country" type="text" class="form-control border-0 rounded-0" id="inputCountry" placeholder="Country"value="{{Auth::user()['country']}}">
                    </div>
                </div>


            </div>
            <div class="form-group col-md-6">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="post_code" type="text" class="form-control border-0 rounded-0" id="inputPostCode" placeholder="Post Code" value="{{Auth::user()['post_code']}}">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="city" type="text" class="form-control border-0 rounded-0" id="inputCity" placeholder="City" value="{{Auth::user()['city']}}">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="address_1" type="text" class="form-control border-0 rounded-0" id="inputAddress" placeholder="Adress"value="{{Auth::user()['address_1']}}">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user"></i>
                    <div class="form-group">
                        <input name="phone_number" type="text" class="form-control border-0 rounded-0" id="inputPhone" placeholder="phone"value="{{Auth::user()['phone_number']}}">
                    </div>
                </div>
                <div class="d-flex justify-content-end" id="updateButton" >
                    <button name= "updateUser" type="submit" class="btn border border-dark rounded-0 " >UPDATE</button>
                </div>
            </div>
        </div>

    </form>
    </div>
    @include('Layouts/footerTemplate')
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>


