var arrayemail = new Array();
var arrayuser = new Array();
var arraypass = new Array();
var i=0;

/*~~~~~~~~~~~~ Registration ~~~~~~~~~~~~~*/

/*---Sign up---*/
document.getElementById("submitup").addEventListener("click", function(){
    var emailup = document.getElementById("emailup").value;
    var userup = document.getElementById("userup").value;
    var passup = document.getElementById("passup").value;
    var pass1up = document.getElementById("pass1up").value;
if(emailup == ""){
        console.log("Email ~ empty");
        return false;
    }
    else if(userup == ""){
        console.log("User ~ empty"); 
        return false;
        }
        else{
            var pschek = regpasswordchk(passup,pass1up);
            if(pschek==true){
                console.log("Email -> " + emailup);
                console.log("User -> " + userup);
                console.log("Pass -> " + passup);
                console.log("Pass1 -> " + pass1up);
                i++;
                reglocalstorage(emailup,userup,passup);
                alert("Data saved! You can log in now.");
                swthreg();
                return true;
            }   
        } 
});
/*------Login-----*/
document.getElementById("submitin").addEventListener("click", function(){
    var userin = document.getElementById("userin").value;
    var passin = document.getElementById("passin").value;

    logincheck(i,userin,passin,extJsonUser(),extJsonPass());
});

/*======== Registration functions ======*/
function regpasswordchk(passup,pass1up){
        if(passup == ""){
            alert("Please enter password");
        }
        else if(pass1up == ""){
            alert("Please enter Confirm password");
        }
            else if(passup != pass1up){
                alert("Passwords did not match: Please try again...");
                return false;
            }
                else{
                    console.log("Pass -> good");
                    return true;
                }
}   

function reglocalstorage(email,user,pass){
    
            arrayemail.push(email);
            arrayuser.push(user);
            arraypass.push(pass);

            let jsonEmail = JSON.stringify(arrayemail);
            let jsonUser = JSON.stringify(arrayuser);
            let jsonPass = JSON.stringify(arraypass);
        
            localStorage.setItem("Emails:", jsonEmail);
            localStorage.setItem("Users:", jsonUser);
            localStorage.setItem("Passwords:", jsonPass);

            console.log("Data saved to local storage");
}

function extJsonUser(){
    let JsonexUser = localStorage.getItem("Users:");
    var item = JSON.parse(JsonexUser);
    return item;
}

function extJsonPass(){
    let JsonexPass = localStorage.getItem("Passwords:");
    var item2 = JSON.parse(JsonexPass);
    return item2;
}

function logincheck(i,userin,passin,userup,passup){
    
    if(userup != userin){
        alert("Username not found.");
        return false;
    }
    else if(passin != passup){
        alert("Wrong password");
        return false;
        }
        else{
            console.log("Log in successfull!");
            window.location.href="/account.html";
            return true;
        }
}
/*======== Switch register/login ========*/
document.getElementById("switch-reg-btn").addEventListener("click", function(){
    swthreg();
});
document.getElementById("switch-log-btn").addEventListener("click", function(){
    swthlog();
});

function swthToLog(){
    document.getElementById("registration").classList.remove("recover");
    document.getElementById("switch-reg").classList.remove("recover");
    document.getElementById("registration").classList.add("hidden");
    document.getElementById("switch-reg").classList.add("hidden");
    document.getElementById("login").classList.remove("hidden");
    document.getElementById("switch-log").classList.remove("hidden");
    document.getElementById("login").classList.add("recover");
    document.getElementById("switch-log").classList.add("recover");
}
function swthToReg(){
    document.getElementById("login").classList.remove("recover");
    document.getElementById("switch-log").classList.remove("recover");
    document.getElementById("login").classList.add("hidden");
    document.getElementById("switch-log").classList.add("hidden");
    document.getElementById("registration").classList.remove("hidden");
    document.getElementById("switch-reg").classList.remove("hidden");
    document.getElementById("registration").classList.add("recover");
    document.getElementById("switch-reg").classList.add("recover");
}