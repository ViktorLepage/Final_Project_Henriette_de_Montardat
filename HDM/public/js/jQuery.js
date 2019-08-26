
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
      
    
  