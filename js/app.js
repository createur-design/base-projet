console.log("DOM READY");

window.addEventListener("load", function(){
    console.log("DOM CHARGE !");
    var loader = document.getElementById("loader");
    loader.style.display = "none"
});

// Burger Menu Simply Basic
var btMenu = document.getElementById('btMenu');
var nav = document.getElementById('nav');
btMenu.addEventListener("click", function (){
    nav.classList.toggle("show");
});
// Burger Menu