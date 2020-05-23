/*===REGISTER===*/
var email= document.forms['form']['email'];
    var username= document.forms['form']['username'];
    var password= document.forms['form']['password'];
    var confirmpassword= document.forms['form']['confirmpassword'];
    
    var email_error = document.getElementById('email_error');
    var username_error = document.getElementById('username_error');
    var password_error = document.getElementById('password_error');
    var confirmpassword_error = document.getElementById('confirmpassword_error');
    
    email.addEvenetListener('textInput', email_Verify);
    username.addEvenetListener('textInput', username_Verify);
    password.addEvenetListener('textInput', password_Verify);
    confirmpassword.addEvenetListener('textInput', confirmpassword_Verify);

    function validated(){
       if(email.value.length <9){
            email_error.style.display ="block";
            email.focus();
            return false;
        }
        if(username.value.length <4){
            username_error.style.display ="block";
            username.focus();
            return false;
        }
        if(password.value.length <6){
            password_error.style.display ="block";
            password.focus();
            return false;
        }
        if(confirmpassword.value.length <5){
            confirmpassword_error.style.display ="block";
            confirmpassword.focus();
            return false;
        }
    }

    function email_Verify(){
        if(email.value.length >= 8){
            email_error.style.display ="none";
            return true;
        }
        if(username.value.length <4){
            username_error.style.display ="none";
            return true;
        }
        if(password.value.length <6){
            password_error.style.display ="none";
            return true;
        }
        if(confirmpassword.value.length <5){
            confirmpassword_error.style.display ="none";
            return true;
        }
    }
  