<?php
$vuosi = date("y");
$kuukausi = date("m");
$paiva = date("d");
                    
$ika = $vuosi-8; 
if($kuukausi < 11){
    
    $ika = $ika - 1;
    
}
if($kuukausi == 11 && $paiva < 4){
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
                <?php 
                include "nappaimisto.php"; 
                include "puhelin.php"
                ?>

            </div>
        </div>

<!--About me kohta  -->
        <div id="About-me-kohta">

            <h1>About me</h1>
            <div id="of-me">
                <div id="of-me-text">
                    <h3>About me</h3>
                    <br>
                    <p>Hei, olen Samuel Parviainen ja erikoistun matemaattisiin ja loogisiin ratkaisuihin. Opinnoissani olen keskittynyt sivustojen rakentamiseen kielillä kuten HTML, PHP, SQL ja JavaScript.</p>
                    <br>
                    <p>Opiskelen tieto- ja viestintätekniikan perustutkintoa Savon ammattiopistossa. TVT-alan opintojen ohella olen suorittanut lukio-opintoja keskittyen matemaattisiin aineisiin, kuten pitkään matematiikkaan (MAA) ja fysiikkaan. Olen opiskellut seuraavia ohjelmointikieliä ja teknologioita: C# (koodauksen perusteisiin), HTML, CSS, PHP, SQL, JSON (REST API) sekä JavaScript sivustojen rakentamiseen, debuggaamiseen ja kehittämiseen. Lisäksi olen käyttäny CSS kirjastoja kuten Bootstrap ja tailwind sivustojen ulkonäköä varten.</p>
                    <br>
                    <p>Opintojeni myötä kiinnostukseni robotiikkaan on kasvanut. Olen rakentanut robottikämmenen tavaroiden poimimiseen ymmärtääkseni koneiden rakennusprosessin vaiheet, ja suunnittelen jo seuraavia projekteja, kuten bipedaaliorobotteja.</p>
                </div>
                
                <div id="of-me-list">
                    <h3>Basic info</h3>
                    <br>
                    
                        <p><b>Nimi:</b> Samuel Onni Joonatan Parviainen</p>                
                        <p><b>Vahvuus:</b> Matemaattinen taito</p>
                        <p><b>Sijainti:</b> Kuopio, Finland</p>
                        <p><b>Github:</b> <a href="https://github.com/samuelparviainen2-maker">samuelparviainen2</a></p>
                        <p><b>Email:</b> samuelparviainen2@gmail.com</p>
                        <p><b>Avoinna:</b> Sivustojen toimintaan</p>
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
                            <?php include "program1.php"; ?>
                        </div>
                        <div class="" id ="2">
                            <?php include "program2.php" ?>
                        </div>
                        <div class="" id ="3">
                            <?php include "program3.php" ?>
                        </div>

                        <div class="next">
                            <button id="b1" onclick="slidecarousel(1)">●</button>
                            <button id="b2" onclick="slidecarousel(2)">●</button>
                            <button id="b3" onclick="slidecarousel(3)">●</button>
                        </div>
                    </div>
                    <script src="slide.js"></script>
                </div>
            </div>

        </div>

        <div class="contact">
            
            <img src="https://media.easy-peasy.ai/27feb2bb-aeb4-4a83-9fb6-8f3f2a15885e/9aeafb05-fc23-4859-9e16-dfa10050c9fd.png" alt="form-image" class="img-contact">
            
            <div id="form-contact">
                <h1>Contact me</h1>
                <form action="https://api.web3forms.com/submit" class="contact-left" method="POST">
                    <input type="hidden" name="access_key" value="63b0c786-6512-40c9-8ad2-6b24b48ea28d">

                    <input type="text" name="nimi" placeholder="Your name..." required>
                    <input type="email" name="email" placeholder="Your Email.." required>
                    <textarea name="message" placeholder="Message..." required></textarea>
                    <button type="submit">Say hello 👋 </button>
                </form>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>