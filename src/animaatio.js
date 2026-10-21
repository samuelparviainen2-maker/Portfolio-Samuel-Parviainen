//Asetetaan muuttujat
const Qnum = 0;
let palaute = "";
let tuloste = "";
const paragraph = document.getElementById("tyosto");


function naytaSana() { //Aloitetaan funktio yläosan teksti animaatiolle
    let number = Math.floor(Math.random() * 7); //Valitaan funktiosta satunnainen teksti

    let str = quote(number);
    let palaute_array = Array.from(str);

    tuloste = "";


    for (let i = 0; i < palaute_array.length; i++) { //silmukalla mennään kaikkien kirjaimien läpi, sanassa ja tulostetaan se tekstiin
        setTimeout(function () {
            const kirjain = palaute_array[i];
            tuloste = tuloste + kirjain;

            paragraph.textContent = tuloste;

            if (i === palaute_array.length - 1) { //ajastin koko funktion resetoinnille
                setTimeout(naytaSana, 2000);
            }
        }, i * 200); //sanan tulostus hidastuu kirjaimien määrän perusteella
    }
}
naytaSana();

function quote(Qnum) { //sanat tekstin tulostukselle
    switch (Qnum) {
        case 0:
            palaute = "C#";
            break;

        case 1:
            palaute = "HTML";
            break;

        case 2:
            palaute = "CSS";
            break;

        case 3:
            palaute = "BootStrap";
            break;

        case 4:
            palaute = "TailWind";
            break;

        case 5:
            palaute = "SQL";
            break;

        case 6:
            palaute = "JSON";
            break;

        case 7:
            palaute = "JavaScript";
            break;
    }
    return palaute;

}