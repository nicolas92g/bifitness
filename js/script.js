//sroll arrow animation
function updateScrollArrow(){
    let arrow = document.getElementById("scrollArrow");

    if (window.scrollY < 10){
        arrow.style.display = "block";
        arrow.style.opacity = String((Math.cos(Date.now() / 350) + 1) / 4);
    }
    else arrow.style.display = "none";

}
setInterval(updateScrollArrow,50);

//burger menu
function openBurgerMenu(open){
    let menu = document.getElementById("menu");

    if (open){
        menu.style.transform = "translateY(0%)";
    }
    else{
        menu.style.transform = "translateY(-100%)";
    }
}

window.onresize = function(event){
    let menu = document.getElementById("menu");

    if (window.innerWidth < 1000){
        openBurgerMenu(false);
    }
    else {
        openBurgerMenu(true);
    }
};



setInterval(function(){
    if (window.innerWidth >= 1000){
        openBurgerMenu(true);
    }
}, 500);
