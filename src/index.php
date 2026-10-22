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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="ylos"></div>
        <?php include "header.php"; ?>
        

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
                    <h3>Basic info</h3>
                    <br>
                    
                        <p><b>Nimi:</b> Samuel Onni Joonatan Parviainen</p>                
                        <p><b>Vahvuus:</b> Matemaattinen taito</p>
                        <p><b>Sijainti:</b> Kuopio, Finland</p>
                        <p><b>Github:</b> <a href=""></a></p>
                        <p><b>Email:</b> samuelparviainen2@gmail.com</p>
                        <p><b>Sivusto:</b> <a href=""></a></p>
                        <p><b>Avoinna:</b> Oikeiden sivujen tekemiseen, ja niiden monimutkaisuuteen</p>
                        <p><b>Ikä:</b> <?php echo $ika; ?></p>

                </div>

            </div>
                <h1>Skills</h1>
            <div id="skills-of-me">
            
                <div>
                    <p>C#</p>
                    <div class="myProgress ">
                        <div class="myBar Csharp"></div>
                    </div>
                    <p>HTML</p>
                    <div class="myProgress ">
                        <div class="myBar HTML"></div>
                    </div>
                    <p>CSS</p>
                    <div class="myProgress ">
                        <div class="myBar CSS"></div>
                    </div>
                    <p>PHP</p>
                    <div class="myProgress ">
                        <div class="myBar PHP"></div>
                    </div>
                    <p>SQL</p>
                    <div class="myProgress ">
                        <div class="myBar SQL"></div>
                    </div>
                    <p>JavaScript</p>
                    <div class="myProgress ">
                        <div class="myBar JavaScript"></div>
                    </div>
                </div>

                <div>
                    <h2>Simple programs:</h2>
                    <br>
                    <div class="slideshow-container">

                        <div class="" id ="1">
                            <p>1</p>
                        </div>
                        <div class="" id ="2">
                            <p>2</p>
                        </div>
                        <div class="" id ="3">
                            <p>3</p>
                        </div>

                        <div class="next">
                            <button id="b1" onclick="slidecarousel(1)">●a</button>
                            <button id="b2" onclick="slidecarousel(2)">●b</button>
                            <button id="b3" onclick="slidecarousel(3)">●c</button>
                        </div>
                    </div>
                    <script src="slide.js"></script>
                </div>
            </div>

        </div>

        <div>

        </div>
    </body>
</html>