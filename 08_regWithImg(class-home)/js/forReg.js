sign_up = document.getElementById('sign_up');
sign_in = document.getElementById('sign_in');
let arr =document.getElementsByTagName("fieldset");


document.getElementById("sign_in").setAttribute("checked", "checked")

sign_up.onclick = function(){
    for (let i = 0, len = arr.length; i<len; i++) {
        arr[i].style.display = "block";
    }
    document.querySelector(".sign-in").style.display = "none";
    document.querySelector("input[value = 'Sign up']").style.display = "block";
    document.querySelector("input[value = 'Sign in']").style.display = "none";
    document.querySelector(".sign-in input[type = 'email']").required = false;
    document.querySelector(".sign-in input[type = 'password']").required = false;
    document.querySelector("fieldset #email").required = true;
    document.querySelector("fieldset #login").required = true;
    document.querySelector("fieldset #password").required = true;
    
}
sign_in.onclick = function() {
   for (let i = 0, len = arr.length; i<len; i++) {
        arr[i].style.display = "none";
    }
    document.querySelector(".sign-in").style.display = "block";
    document.querySelector("input[value = 'Sign up']").style.display = "none";
    document.querySelector("input[value = 'Sign in']").style.display = "block";
    
    document.querySelector(".sign-in input[type = 'email']").required = true;
    document.querySelector(".sign-in input[type = 'password']").required = true;
    document.querySelector("fieldset #email").required = false;
    document.querySelector("fieldset #login").required = false;
    document.querySelector("fieldset #password").required = false;
}