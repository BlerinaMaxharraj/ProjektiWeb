
if(document.getElementById('test') != null){
    document.getElementById('errors').innerHTML =document.getElementById('test').innerHTML;
}
function validate(){


    
    
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmpass = document.getElementById("confirmpass").value;


    if(username == "" || email == "" || password == "" || confirmpass == "" || username == null || email == null || password == null ||
        confirmpass == null){
        document.getElementById("errors").innerHTML = "All fields must be required!";    
        return false;
    }
    else if(username.length < 4){
        document.getElementById("errors").innerHTML = "Username must be at least 4 characters";
        return false;
    }
    else if(password.length < 8){
        document.getElementById("errors").innerHTML = "Password must be at least 8 characters";
        return false;
    }
    else if(confirmpass != password){
        document.getElementById("errors").innerHTML = "Password doesn't match";
        return false;
    }
    else{
        return true;
    }
}

function validatelogin(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;


    if(email == "" || password == "" || email == null || password == null){
        document.getElementById("error").innerHTML = "All fields must be required!";    
        return false;
    }
    else if(email.length < 5){
        document.getElementById("error").innerHTML = "Email must be at least 5 characters";
        return false;
    }
    else if(password.length < 8){
        document.getElementById("error").innerHTML = "Password must be at least 8 characters";
        return false;
    }
    else{
        return true;
    }
}