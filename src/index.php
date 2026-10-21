<?php
$vuosi = date("y");
$kuukausi = date("m");
$paiva = date("d");
                    
$ika = $vuosi-8;
if($kuukausi < 11 | $paiva < 4){
    $ika = $ika - 1;
}


?>
<!Doctype html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <?php include "header.php"; ?>
        <div id="ylos"></div>

        
        <div id="kayttaja">
            <div id="kayttaja-background">
                <div id="nimitys">

                    <img src="https://avatars.githubusercontent.com/u/244552744" alt="Samuel Parviainen" id="profiilikuva">

                    <h2>Samuel Parviainen</h2>
                    <br>
                    <p id="tyosto"> </p>
                    
                    <script src="animaatio.js">

                    </script>
                    <br>
                    <p>Tieto- ja viestintä tekniikan perustutkinnon opiskelija</p>
                </div>
                <?php include "nappaimisto.php"; ?>
            </div>
        </div>

<!--About me kohta  -->
        <div>

            <h1>About me</h1>
            <div id="of-me">
                <div id="of-me-text">
                    <h3>About me</h3>
                    <br>
                    <p>Hei, olen Samuel Parviainen ja erikoistun matemaattisiin ja loogisiin ratkaisuihin. Opinnoissani olen keskittynyt sivustojen rakentamiseen kielillä kuten HTML, PHP, SQL ja JavaScript.</p>
                    <br>
                    <p>Opiskelen tieto- ja viestintätekniikan perustutkintoa Savon ammattiopistossa. TVT-alan opintojen ohella olen suorittanut lukio-opintoja keskittyen matemaattisiin aineisiin, kuten pitkään matematiikkaan (MAA) ja fysiikkaan. Olen opiskellut seuraavia ohjelmointikieliä ja teknologioita: C# (koodauksen perusteisiin), HTML, CSS, PHP, SQL, JSON (REST API) sekä JavaScript sivustojen rakentamiseen, debuggaamiseen ja kehittämiseen. Lisäksi olen käyttäny CSS kirjastoja kuten Bootstrap ja tailwind sivustojen ulkonäköä varten.</p>
                    <br>
                    <p>Opintojeni myötä kiinnostukseni robotiikkaan on kasvanut. Olen rakentanut robottikämmenen tavaroiden poimimiseen ymmärtääkseni koneiden rakennusprosessin vaiheet, ja suunnittelen jo seuraavia projekteja, kuten bipedaaliorobotteja. Lisäksi olen osallistunut Taitaja 2027 -kilpailuihin näyttääkseni taitoni luotettavammim ja muita tapoja paremmin.</p>
                </div>

                <div id="of-me-list">
                    <p>Nimi: Samuel Onni Joonatan Parviainen</p>
                    <br>
                    <p>Vahvuus: Matemaattinen taito</p>
                    <br>
                    <p>Sijainti: Kuopio, Finland</p>
                    <br>
                    <p>Github: <a href=""></a></p>
                    <br>
                    <p>Email: samuelparviainen2@gmail.com</p>
                    <br>
                    <p>Sivusto: <a href=""></a></p>
                    <br>
                    <p>Avoinna: Oikeiden sivujen tekemiseen, ja niiden monimutkaisuuteen</p>
                    <br>
                    <p>Ikä: <?php echo $ika; ?></p>
                </div>

            </div>

            <div id="skills-of-me">


            </div>

        </div>

        <div>

        </div>
    </body>
</html>