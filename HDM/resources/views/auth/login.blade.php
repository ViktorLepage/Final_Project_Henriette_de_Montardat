@extends('layouts.app')
@section('content')
@include('Layouts/headerTemplate')

<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

                                            <div class="col-md-10">
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
                                        
                                        <div class="col-md-10">
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

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>

    /*
        let registerName = document.querySelector("#registerEmail");
        registerName.addEventListener("keyUp", function(){
           //gather
           const nomValue = registerName.value;
           console.log("dawqwqdwdsd")
           //logic
           if (nomValue.length >= 4) {
             console.log("green")
             //feed back
             registerName.setAttribute("style","color:red !important;background-color:red !important; ")
           } else {
             //feed back
             console.log("red")
             registerName.style.border = "1px solid red";
           }
        
        });

*/

$(function(){

    $("#registerEmail").keyup( function(event) {


        event.preventDefault();
        console.log("click !");

        let mailRegister=$("#registerEmail");

        let mailValue=mailRegister.val();

        if (mailValue <= 0) {
            $('#registerEmail').attr('style', 'border: 1px solid red !important');
            //feed back
        } else {
            //feed back
            $('#registerEmail').attr('style', 'border: 1px solid green !important');
           }
        
        
        
        console.log(mailValue);

        
       

    });


    $("#registerPassword").keyup( function(event) {


        event.preventDefault();
        console.log("click !");

        let mailRegister=$("#registerPassword");

        let mailValue=mailRegister.val();

        if (mailValue <= 0) {
            $('#registerPassword').attr('style', 'border: 1px solid red !important');
            //feed back
        } else {
            //feed back
            $('#registerPassword').attr('style', 'border: 1px solid green !important');
           }
        
        
        
        console.log(mailValue);

        
       

    });
    $("#password-confirm").keyup( function(event) {


        event.preventDefault();
        console.log("click !");

        let mailRegister=$("#password-confirm");

        let mailValue=mailRegister.val();

        if (mailValue <= 0) {
            $('#password-confirm').attr('style', 'border: 1px solid red !important');
            //feed back
        } else {
            //feed back
            $('#password-confirm').attr('style', 'border: 1px solid green !important');
           }
        
        
        
        console.log(mailValue);

        
       

    });




});
        
      
        </script>
@endsection

<script type="text/javascript" src="{{ URL::asset('js/loginScript.js') }}"></script>
