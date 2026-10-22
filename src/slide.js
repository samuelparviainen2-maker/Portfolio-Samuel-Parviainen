const slide = 0;
const access_button = [1, 2, 3];


function slidecarousel(button) {

    var x = document.getElementById(button);

    for (let i = 0; i < access_button.length; i++) {
        var poisto = document.getElementById(access_button[i]);
        poisto.style.display = "none"
    }
    if (x.style.display === "none") {
        x.style.display = "block";
    }


    var y = document.getElementById("b" + button);

    for (let i = 0; i < access_button.length; i++) {
        var vari = document.getElementById("b" + access_button[i]);
        vari.style.color = "#555555"
    }
    if (y.style.color === "#555555") {
        y.style.color = "#ff0000";
    }


}