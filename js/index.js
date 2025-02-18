

document.addEventListener("DOMContentLoaded",function(){


    let clubNav=document.querySelector(".elementoNav");

    let subMenu = document.querySelector(".subMenu");

    clubNav.addEventListener("click", function(event) {

        event.stopPropagation(); 

        if (subMenu.style.display === "block") {

            subMenu.style.display = "none";

        } else {

            subMenu.style.display = "block";

        }
    });

    document.addEventListener("click", function(event) {
        if (!clubNav.contains(event.target)) {
            subMenu.style.display = "none";
        }
    });

    document.getElementById("boton").addEventListener("click",function(){

        let cookie=document.getElementById('cookie');

        let boton=document.getElementById('boton');

        cookie.style.display='none';
        
    })



})