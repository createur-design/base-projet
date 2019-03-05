console.log("DOM READY");

// Burger Menu Simply Basic
var btMenu = document.getElementById('btMenu');
var nav = document.getElementById('nav');
var visibleMenu = false;
btMenu.addEventListener("click", function (){
    console.log('click menu');
    if(visibleMenu === false){
        nav.style.display = "block";
        visibleMenu = true;
    }
    else{
        nav.style.display = "none";
        visibleMenu = false;
    }
});
// Burger Menu