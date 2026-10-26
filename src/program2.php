<?php
$latitude = 62.8924;
$longitude = 27.6770;
// Met.no API URL
$url = "https://api.met.no/weatherapi/locationforecast/2.0/compact?lat=$latitude&lon=$longitude";

$options = [
"http" => [
"header" => "User-Agent: OmaSovellus/1.0 oma.samuelparviainen2@gmail.com\r\n"
]
];
$context = stream_context_create($options);
// Haetaan data
$response = file_get_contents($url, false, $context);
if ($response === FALSE) {
    die("Säädatan haku epäonnistui.");
}
// Muutetaan JSON taulukoksi
$data = json_decode($response, true);

$aikasarja = array_slice($data['properties']['timeseries'], 0, 10); //otetaan kuusi aikasarjaa, mitkä pelataan aikatarkistus funktion läpi
$index = righttime($aikasarja);

$temp = $aikasarja[$index]['data']['instant']['details']['air_temperature'];
$saa = $aikasarja[$index]['data']['next_1_hours']['summary']['symbol_code'];

$saa_symbol = getImage($saa);

?>
<!-- Mitä ohjelmassa näkyy-->
<head>
    <link rel="stylesheet" href="style.css">
</head>

<div class="saaData">
    <h3 id="city">Kuopio</h3>
    <img src="<?php echo $saa_symbol; ?>" alt="sää symboli">
    <p id="temp"><b>Lämpötila:</b></p>
    <p>
        <b>
    <?php
    echo $temp;
    ?>
     ℃
    </b>
    </p>
</div>



<?php

function righttime($aikasarja) {
    date_default_timezone_set('Europe/Helsinki');
    $kello = date('H');

    foreach ($aikasarja as $index => $sarja) {
        $hour = date('H', strtotime($sarja['time']));

        if ($hour === $kello) {
            return $index;
        }
    }

    return 0;
}


function getImage($selite){ //ottaa symbolin selitteen, ja valitsee sille oman symboli kuvan
    switch($selite){
        
        case "clear_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/101.svg";
            break;
        case "mostlyclear_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/102.svg";
            break;
        case "partlycloudy_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/104.svg";
            break;
        case "mostlycloudy_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/106.svg";
            break;
        case "cloudy_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/107.svg";
            break;
        case "fog_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/109.svg";
            break;
        case "drizzle_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/111.svg";
            break;
        case "freezingdrizzle_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/114.svg";
            break;
        case "freezingrain_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/117.svg";
            break;
        case "isolatedrainshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/121.svg";
            break;
        case "showersinplaces_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/124.svg";
            break;
        case "showers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/127.svg";
            break;
        case "partlycloudywithoccasionallightrain_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/131.svg";
            break;
        case "partlycloudywithoccasionalmoderaterain_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/132.svg";
            break;
        case "partlycloudywithoccasionalheavyrain_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/133.svg";
            break;
        case "mostlycloudywithoccasionallightrain_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/134.svg";
            break;
        case "mostlycloudywithoccasionalmoderaterain_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/135.svg";
            break;
        case "mostlycloudywithoccasionalheavyrain_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/136.svg";
            break;
        case "lightrain_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/137.svg";
            break;
        case "moderaterainfall_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/138.svg";
            break;
        case "heavyrain_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/139.svg";
            break;
        case "partlycloudywithoccasionallightsleetorsleetshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/141.svg";
            break;
        case "partlycloudywithoccasionalmoderatesleetorsleetshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/142.svg";
            break;
        case "partlycloudywithoccasionalheavysleetorsleetshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/143.svg";
            break;
        case "mostlycloudywithoccasionallightsleetorsnowshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/144.svg";
            break;
        case "mostlycloudywithoccasionalmoderatesleetorsnowshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/145.svg";
            break;
        case "mostlycloudywithoccasionalheavysleetorsleetshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/146.svg";
            break;
        case "lightsleet_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/147.svg";
            break;
        case "moderatesleet_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/148.svg";
            break;
        case "heavysleet_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/149.svg";
            break;
        case "partlycloudywithoccasionallightsnowfallorsnowshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/151.svg";
            break;
        case "partlycloudywithoccasionalmoderatesnowfallorsnowshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/152.svg";
            break;
        case "partlycloudywithoccasionalheavysnowfallorsnowshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/153.svg";
            break;
        case "mostlycloudywithoccasionallightsnoworsleet_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/154.svg";
            break;
        case "mostlycloudywithoccasionalmoderatesnowfallorsnowshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/155.svg";
            break;
        case "mostlycloudywithoccasionalheavysnowfallorsnowshowers_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/156.svg";
            break;
        case "lightsnowfall_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/157.svg";
            break;
        case "moderatesnowfall_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/158.svg";
            break;
        case "heavysnowfall_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/159.svg";
            break;
        case "isolatedhailstorms_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/161.svg";
            break;
        case "hailshowersinplaces_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/164.svg";
            break;
        case "hailstorms_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/167.svg";
            break;
        case "isolatedthunderstorms_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/171.svg";
            break;
        case "thunderstormsinplaces_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/174.svg";
            break;
        case "thunderstorms_night":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/177.svg";
            break;


        case "clear":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/1.svg";
            break;
        case "mostlyclear":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/2.svg";
            break;
        case "partlycloudy":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/4.svg";
            break;
        case "mostlycloudy":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/6.svg";
            break;
        case "cloudy":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/7.svg";
            break;
        case "fog":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/9.svg";
            break;
        case "drizzle":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/11.svg";
            break;
        case "freezingdrizzle":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/14.svg";
            break;
        case "freezingrain":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/17.svg";
            break;
        case "isolatedrainshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/21.svg";
            break;
        case "showersinplaces":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/24.svg";
            break;
        case "showers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/27.svg";
            break;
        case "partlycloudywithoccasionallightrain":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/31.svg";
            break;
        case "partlycloudywithoccasionalmoderaterain":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/32.svg";
            break;
        case "partlycloudywithoccasionalheavyrain":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/33.svg";
            break;
        case "mostlycloudywithoccasionallightrain":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/34.svg";
            break;
        case "mostlycloudywithoccasionalmoderaterain":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/35.svg";
            break;
        case "mostlycloudywithoccasionalheavyrain":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/36.svg";
            break;
        case "lightrain":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/37.svg";
            break;
        case "moderaterainfall":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/38.svg";
            break;
        case "rain":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/38.svg";
            break;
        case "heavyrain":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/39.svg";
            break;
        case "partlycloudywithoccasionallightsleetorsleetshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/41.svg";
            break;
        case "partlycloudywithoccasionalmoderatesleetorsleetshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/42.svg";
            break;
        case "partlycloudywithoccasionalheavysleetorsleetshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/43.svg";
            break;
        case "mostlycloudywithoccasionallightsleetorsnowshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/44.svg";
            break;
        case "mostlycloudywithoccasionalmoderatesleetorsnowshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/45.svg";
            break;
        case "mostlycloudywithoccasionalheavysleetorsleetshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/46.svg";
            break;
        case "lightsleet":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/47.svg";
            break;
        case "moderatesleet":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/48.svg";
            break;
        case "heavysleet":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/49.svg";
            break;
        case "partlycloudywithoccasionallightsnowfallorsnowshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/51.svg";
            break;
        case "partlycloudywithoccasionalmoderatesnowfallorsnowshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/52.svg";
            break;
        case "partlycloudywithoccasionalheavysnowfallorsnowshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/53.svg";
            break;
        case "mostlycloudywithoccasionallightsnoworsleet":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/54.svg";
            break;
        case "mostlycloudywithoccasionalmoderatesnowfallorsnowshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/55.svg";
            break;
        case "mostlycloudywithoccasionalheavysnowfallorsnowshowers":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/56.svg";
            break;
        case "lightsnowfall":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/57.svg";
            break;
        case "moderatesnowfall":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/58.svg";
            break;
        case "heavysnowfall":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/59.svg";
            break;
        case "isolatedhailstorms":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/61.svg";
            break;
        case "hailshowersinplaces":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/64.svg";
            break;
        case "hailstorms":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/67.svg";
            break;
        case "isolatedthunderstorms":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/71.svg";
            break;
        case "thunderstormsinplaces":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/74.svg";
            break;
        case "thunderstorms":
            return "https://cdn.fmi.fi/symbol-images/smartsymbol/v3/p/77.svg";
            break;
        default:
            return "Ei kuvaa";
            break;
            }
}