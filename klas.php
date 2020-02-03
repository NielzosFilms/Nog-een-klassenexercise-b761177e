<?php

echo("Wie zit er in de klas?".PHP_EOL);
$namen_text = readline();
$namen = explode(" ", $namen_text);
foreach($namen as $naam){
    echo("$naam".PHP_EOL);
}

?>