let changeButton = document.querySelector(".change");
let cancelChangeButton = document.querySelector(".cancel-change");

let form = document.querySelector("form:nth-of-type(2)");

changeButton.onclick = function(){
changeButton.hidden = true;
cancelChangeButton.hidden = false;
    
for (let i = 0, length = form.children.length; i < length; i++) {
     if (form.children[i].readonly == true) 
         form.children[i].readonly = false;
    if (form.children[i].tagName == "INPUT") 
    form.children[i].style.border = "1px solid black";
    document.getElementById("password").style.border = "1px solid black";
}
    
let lookElems = form.querySelectorAll(".sex-select, .subs-change, .pass, .submit");
for (let i = 0; i<lookElems.length; i++){   
    lookElems[i].style.display = "block";}
let notLookElems = form.querySelectorAll(".sex, .subscribes");
for (let i = 0; i<notLookElems.length; i++){
     notLookElems[i].style.display = "none";}
};

cancelChangeButton.onclick = function(){
    window.location.reload();
};

let sexCheck = +document.querySelector(".sex-check").value;
let eventsCheck = +document.querySelector(".events-check").value;
let gamesCheck = +document.querySelector(".games-check").value;
let newsCheck = +document.querySelector(".news-check").value;


if (sexCheck)
    {
        document.querySelector(".sex>span").innerHTML = "Мужской";
        document.querySelector(".select-items #male").checked = true;
    }
else if (sexCheck == 0)
    {
        document.querySelector(".sex>span").innerHTML = "Женский";
        document.querySelector(".select-items #famale").checked = true;
    }
else {
    document.querySelector(".sex>span").innerHTML = "Не определён";
}

let subsCheck = [];
if (eventsCheck) {
    subsCheck.push("События");
    document.querySelector(".select-items #events").checked = true;
}
if (gamesCheck) {
    subsCheck.push("Игры");
    document.querySelector(".select-items #games").checked = true;
}
if (newsCheck) {
    subsCheck.push("Новости");
    document.querySelector(".select-items #news").checked = true;
}

document.querySelector(".subscribes>span").innerHTML = subsCheck.join();

let businessCheck = document.querySelector(".business-check").value;
if (businessCheck == "student") {
    document.querySelector("option[value = 'student']").selected = true;
}
if (businessCheck == "worker") {
    document.querySelector("option[value = 'worker']").selected = true;
}
if (businessCheck == "schoolboy") {
    document.querySelector("option[value = 'schoolboy']").selected = true;
}