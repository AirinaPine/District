// NAVIGATION BAR
//
function openNavigationBar() {
    var x = document.getElementById("menu2")
    if (x.style.display === "block") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}

//function openNavBar() {
//    let w = window.innerWidth;
//    let menu1 = document.getElementById("menu");
//    if (w < 768) {
//        menu.style.display = "none";
//    } else {
//        menu.style.display = "flex";
//    }
//}
//
//function myFunction() {
//    let m = document.getElementById("menu");
//    let 
//    if
//}

// BACK TO TOP BUTTON

// Conditions for button to apear

window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        document.getElementById("btn-top").style.display = "block";
    } else {
        document.getElementById("btn-top").style.display = "none";
    }
}

// when button is pressed, scroll to the top of the page

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// SHOW HEIGHTS

$("#columnTwo").height($("#columnOne").height());