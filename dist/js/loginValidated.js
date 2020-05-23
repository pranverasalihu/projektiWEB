
    var username= document.forms['form']['username'];
    var password= document.forms['form']['password'];
    
    
   
    var username_error = document.getElementById('username_error');
    var password_error = document.getElementById('password_error');
    
   
    username.addEvenetListener('textInput', username_Verify);
    password.addEvenetListener('textInput', password_Verify);
  

    function validated(){
      
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
       
    }