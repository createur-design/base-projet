console.log("DOM READY");

window.addEventListener("load", function(){
    console.log("DOM CHARGE !");
    var loader = document.getElementById("loader");
    loader.style.display = "none"
});

// Burger Menu Simply Basic
var btMenu = document.getElementById('btMenu');
var nav = document.getElementById('nav');
var visibleMenu = false;
btMenu.addEventListener("click", function (){
    console.log('click menu');
    if(visibleMenu === false){
        nav.classList.add("show");
        visibleMenu = true;
    }
    else{
        nav.classList.remove("show");
        visibleMenu = false;
    }
});
// Burger Menu