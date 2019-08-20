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

    <header> @include('Layouts/headerTemplate')</header>
    <h1 class="pt-5">ACCOUNT INFORMATION</h1>
    <form id="theForm" action="/contact" method="POST" class="d-flex justify-content-center">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="d-flex align-items-center" >
                    <i class="fas fa-user  pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="inputFirstName" type="text" class="form-control border-0 rounded-0 focus" id="inputFirstName" aria-describedby="nameHelp" placeholder="votre prénom">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="inputLastName" type="text" class="form-control border-0 rounded-0" id="inputLastName" aria-describedby="lastNameHelp" placeholder="votre nom">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="inputEmail" type="email" class="form-control border-0 rounded-0" id="inputEmail" aria-describedby="emailHelp" placeholder="email">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="inputPassword" type="text" class="form-control border-0 rounded-0" id="inputPassword" placeholder="password">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user"></i>
                    <div class="form-group">
                        <input name="inputCountry" type="text" class="form-control border-0 rounded-0" id="inputCountry" placeholder="Country">
                    </div>
                </div>


            </div>
            <div class="form-group col-md-6">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="inputPostCode" type="text" class="form-control border-0 rounded-0" id="inputPostCode" placeholder="Post Code">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="inputCity" type="text" class="form-control border-0 rounded-0" id="inputCity" placeholder="City">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user pb-4"></i>
                    <div class="form-group pb-4">
                        <input name="inputAddress" type="text" class="form-control border-0 rounded-0" id="inputAddress" placeholder="Adress">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-user"></i>
                    <div class="form-group">
                        <input name="inputPhone" type="text" class="form-control border-0 rounded-0" id="inputPhone" placeholder="phone">
                    </div>
                </div>
                <div class="d-flex justify-content-end" id="updateButton" >
                    <button name= "updateUser" type="submit" class="btn border border-dark rounded-0 " >UPDATE</button>
                </div>
            </div>
        </div>

    </form>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  @include('Layouts/footerTemplate')
</html>


