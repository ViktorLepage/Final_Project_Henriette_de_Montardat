@extends('layouts.app')
@section('content')
@include('Layouts/headerTemplate')

<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

<div id="pageContainer">
    <div id="contentWrap">
        <div id="formDiv" class="forms">
            <div id="loginConatiner" class="container">
                <div id="loginForm"  class="row justify-content-center">
                    <div id="formDiv"class="col-md-8">
                        <div id="loginCard" class="card">
                            <div id="cardHeader" class="card-header">{{ __('Login') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">

                                        <div id="logInDiv" class="form-group  col-md-10 ">
                                            <input id="email" placeholder="E-Mail Address"  type="email" class="form-control border-0 rounded-0  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-md-10">
                                            <input id="password" placeholder="Password" type="password" class="form-control border-0 rounded-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button id="loginSubmit" type="submit" class=" col-md-8 btn border border-dark rounded-0 ">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>









            <div id="registerContainer" class="container">
                <div  id="registerForm" class="row justify-content-center">
                    <div id="formDiv" class="col-md-8">
                        <div id="registerCard" class="card">
                            <div id="cardHeader" class="card-header">{{ __('Register') }}</div>

                            <div class="card-body">


                                <!-- -----------Register Form-------- -->
                                <form id="registerForm" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row">

                                            <div id="emailDiv" class="col-md-10">
                                            <input id="registerEmail" placeholder="E-Mail Address" type="email" class="form-control border-0 rounded-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <!--  registerPassword -->
                                            <div class="col-md-10">
                                            <input id="registerPassword" placeholder="Password" type="password" class="form-control border-0 rounded-0 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div id="passConfirm" class="col-md-10">
                                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control border-0 rounded-0" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-5">
                                            <button id="registerSubmit" type="submit" class="col-md-8 btn broder border-dark rounded-0">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>


</div>
@include('Layouts/footerTemplate')
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>


<<<<<<< HEAD
<script>


/* injection checks for special charachters on registerEmail input*/
$(function(){

    $("#registerEmail").keyup( function(event) {

        event.preventDefault();
        let mailRegister=$("#registerEmail");
        let mailValue=mailRegister.val();

        //applying css styling o inputs through JQuery
        if (mailValue <= 0) {
            //feed back
            $('#registerEmail').attr('style', 'border: 1px solid red !important');
        } else {
            //feed back
            $('#registerEmail').attr('style', 'border: 1px solid green !important');
           }

        //checks for special characters injection for email input
        let specialChars = "<>!#$%^&*()+[]{}?:;|'\"\\,/~`=";
        let check = function(string){
        for(i = 0; i < specialChars.length;i++){
        if(string.indexOf(specialChars[i]) > -1){

            return true
            }

        }
         return false;
        }
            if(check($('#registerEmail').val()) == true){
             // Code that needs to execute
                 let emailDiv = $("#emailDiv");
                 let warningMessage=$("<p></p>").text("Not accepted (<>!#$%^&*()+[]{}?:;|'\"\\,/~`=)");
                warningMessage.css({color: "red", fontSize: "15px", fontFamily: "calibri" })
                 emailDiv.append(warningMessage);
                 return;
             }else{

                let emailDiv = $("#emailDiv");

                emailDiv.removeClass("#emailDiv");







            }


    });




/* injection checks for special charachters on loginEmail input*/


    $("#email").keyup( function(event) {

        event.preventDefault();
        let loginMail=$("#email");
        let mailValue=loginMail.val();

        if (mailValue <= 0) {
            //feed back
            $('#email').attr('style', 'border: 1px solid red !important');
        } else {
            //feed back
            $('#email').attr('style', 'border: 1px solid green !important');
           }

        let specialChars = "<>!#$%^&*()+[]{}?:;|'\"\\,/~`=";
        let check = function(string){
        for(i = 0; i < specialChars.length;i++){
        if(string.indexOf(specialChars[i]) > -1){

            return true
            }

        }
         return false;
        }
            if(check($('#email').val()) == false){
             // Code that needs to execute when none of the above is in the string
             }else{

                 let emailDiv = $("#logInDiv");
                 let warningMessage=$("<p></p>").text("Not accepted (<>!#$%^&*()+[]{}?:;|'\"\\,/~`=)");
                warningMessage.css({color: "red", fontSize: "15px", fontFamily: "calibri" })
                 emailDiv.append(warningMessage);

            }

    });


    //Register Password


    $("#registerPassword").keyup( function(event) {


        event.preventDefault();

        let passRegister=$("#registerPassword");

        let passValue=passRegister.val();

        if (passValue <= 0) {
            //feed back
            $('#registerPassword').attr('style', 'border: 1px solid red !important');
        } else {
            //feed back
            $('#registerPassword').attr('style', 'border: 1px solid green !important');
           }
    });

    //Login-password

    $("#password").keyup( function(event) {


        event.preventDefault();

        let logPass=$("#password");

        let passValue=logPass.val();

        if (passValue <= 0) {
            //feed back
            $('#password').attr('style', 'border: 1px solid red !important');
        } else {
            //feed back
            $('#password').attr('style', 'border: 1px solid green !important');
           }







    });



    //Register confirmation password

    $("#password-confirm").keyup( function(event) {


        event.preventDefault();

        let passCofirmation=$("#password-confirm");

        let confirmationValue=passCofirmation.val();

        if (confirmationValue <= 0) {
            $('#password-confirm').attr('style', 'border: 1px solid red !important');
            //feed back
        } else {
            //feed back
            $('#password-confirm').attr('style', 'border: 1px solid green !important');
           }








    });




});


        </script>


=======
<script type="text/javascript" src="{{ URL::asset('js/jQuery.js') }}"></script>
>>>>>>> 587e5d4b3e229d0e67e329148d692bc55c1a1e1d
@endsection


