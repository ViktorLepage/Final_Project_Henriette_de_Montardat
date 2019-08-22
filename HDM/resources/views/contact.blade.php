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
<body>
@include('Layouts/headerTemplate')
    <div id="pageContainer">
        <div id="contentWrap">
            <h1 class="pt-5">CONTACT</h1>
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
                            <i class="fas fa-user"></i>
                            <div class="form-group">
                                <input name="inputSubject" type="text" class="form-control border-0 rounded-0" id="inputSubject" placeholder="Sujet">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="form-group pt-2">
                            <textarea class="form-control rounded-0 " name="inputTextArea" id="inputText" cols="35" rows="7" placeholder="Ecrivez-ici.."></textarea>
                        </div>
                        <div class="d-flex justify-content-end" id="submitButton" >
                            <button name= "contactSend" type="submit" class="btn border border-dark rounded-0 " >ENVOYER</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    </div>
</body>

@include('Layouts/footerTemplate')
</html>


