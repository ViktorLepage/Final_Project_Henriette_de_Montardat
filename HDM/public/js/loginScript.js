 
 /*
 // create variable for the usefull elements
 const registerForm = document.querySelector("#registerForm");
 const registerName = document.querySelector("#registerName");
 const registerSurname = document.querySelector("#registerSurname");
 const registerEmail = document.querySelector("#registerEmail");
 const password = document.querySelector("#registerPassword");
 const passConfirmation = document.querySelector("#registerPassword-confirm");

 
 //add the event listeners
 //when form is submitted
 registerForm.addEventListener("submit", globCheck);
 //on each key press of each inputs
 registerName.addEventListener("keyup", checkName);
 //registerSurname.addEventListener("keyup", checkSurname);
 registerEmail.addEventListener("keyup", checkEmail);
 password.addEventListener("keyup", passCheck);
 password.addEventListener("keyup", passConfirm);

 //this function check name, phone and email
 function globCheck(e) {
   e.preventDefault();
   //logic
   checkName();
   //checkSurname();
   checkEmail();
   passCheck();
   passConfirm();
 }
 //check  the name
 function checkName() {
   //gather
   const nomValue = registerName.value;
   
   //logic
   const nameCheck = nomValue.length >= 4;
   if (nomValue.length >= 4) {
     //feed back
     registerName.style.borderColor = "green";
   } else {
     //feed back
     registerName.style.borderColor = "red";
   }
 }


 //check  the surname
 
 function checkSurname() {
   //gather
   const nomValue = registerName.value;
   //logic
   const nameCheck = nomValue.length >= 4;
   if (nomValue.length >= 4) {
     //feed back
     nomInput.style.borderColor = "green";
   } else {
     //feed back
     nomInput.style.borderColor = "red";
   }
 }
 
 //check only the email
 function checkEmail() {
   const emailValue = registerEmail.value;
   const containsAt = emailValue.indexOf("@") > 0;
   const containsDot = emailValue.indexOf(".") > 0;
   if (containsAt && containsDot) {
    registerEmail.style.borderColor = "green";
   } else {
    registerEmail.style.borderColor = "red";
   }
 }
 //check only the
 function passCheck() {
   const numberValue = numberInput.value;
   const phoneCheck = numberValue.length === 9;
   if (phoneCheck) {
     numberInput.style.borderColor = "green";
   } else {
     numberInput.style.borderColor = "red";
   }
 }
 function passConfirm() {
   const numberValue = numberInput.value;
   const phoneCheck = numberValue.length === 9;
   if (phoneCheck) {
     numberInput.style.borderColor = "green";
   } else {
     numberInput.style.borderColor = "red";
   }
 }
console.log("hello");

*/


let registerName = document.getElementById("registerName");
registerName.addEventListener("keyPress", function(){
   //gather
   const nomValue = registerName.value;
   console.log("dawqwqdwdsd")
   //logic
   if (nomValue.length >= 4) {
     console.log("green")
     //feed back
     registerName.style.border = "1px solid green";
   } else {
     //feed back
     console.log("red")
     registerName.style.border = "1px solid red";
   }

});

console.log("helloooooooo")