<?php

echo "geef een lijst met namen";
$namen = readline("");


foreach (explode(" ", $namen) as $naam){
    echo "de klas bestaat uit:" . $naam . "\n";

}
   