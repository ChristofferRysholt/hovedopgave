function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function PopUp(showOrHide) {
    if (showOrHide === 'hide') {
        document.getElementById('pop-up-banner').style.display = "none";
    }
    else if(localStorage.getItem("popupTrue") !== "1" && showOrHide === 'show') {
        document.getElementById('pop-up-banner').removeAttribute('style');
        localStorage.setItem("popupTrue", "1");
    }
}
window.onload = function () {
    setTimeout(function () {
        PopUp('show');
    }, 1000);
}
function hideBanner(e) {
    if (e.target.id == 'pop-up-banner') {
        document.getElementById('pop-up-banner').style.display = 'none';
        localStorage.setItem("popupTrue", "1");
    }
}