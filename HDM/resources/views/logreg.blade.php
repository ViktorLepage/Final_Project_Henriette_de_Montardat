<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!--extends('header');-->
<body>
<!--header.php-->
@include('Layouts/headerTemplate')

           <main>
            <section id="loginForm">
            <label for="login">Login</label>
            <form action="" method="post" name="login"><br>
                    @csrf
            <label for="loginPassword">Email</label>
            <input type="email" name="loginEmail" id="loginEmail" value="Email"><br>
            <label for="loginPassword">Password</label>
            <input type="password" name="loginPassword" id="loginPassword" value="Password"><br>
            <label for="loginSend"></label>
            <input type="submit" value="Send" id="loginSubmit" name="loginSubmit"><br>
        </form>
     </section>
     <br>
     <section id="signupForm">
         <label for="signup">Create Account</label>
         <form action="" method="post" name="signup">
             @csrf
             <input type="text" name="signupFirstName" id="signupFirstName" value="First Name"><br>
             <input type="text" name="signupLastName" id="signupLastName" value="Last Name"><br>
            <input type="email" name="signupEmail" id="signupEmail" value="Email"><br>
            <input type="password" name="signupPassword" id="signupPassword" value="Password"><br>
            <input type="password" name="signupPasswordConfirm" id="signupPasswordConfirm" value="Confirm Passord"><br>
            <select name="signupCountry" id="signupCountry">Country<br>
                <option value="Luxembourg">Luxembourg</option>
            </select><br>
            <select name="signupPostbox" id="signupPostbox">Post Box<br>
                <option value="0000">0000</option>
            </select><br>
            <input type="text" name="signupCity" id="signupCity" value="City"><br >
            <input type="text" name="signupAddress" id="signupAddress" value="Address"><br>
            <input type="text" name="signupPhoneNumber" id="signupPhoneNumber" value="Phone Number Optional"><br>
            <input type="button" value="Send" id="signupSubmit" name="signupSubmit"><br>
        </form>
     </section>
     <section>
         <a href="">Forget password</a>
        </section>
    </main>
    <!--footer.php-->
    @include('layouts/footerTemplate')
</body>
</html>
<!--extends('footer');-->
