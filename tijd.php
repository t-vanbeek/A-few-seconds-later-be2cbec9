<?php

echo "Alleen nummers" . PHP_EOL;
$tijd = readline();
if(!is_numeric($tijd)) {
    echo "Geen tijd gevonden";
    exit;
}
echo "s, u of m?" . PHP_EOL;
$y = readline();

$x = "-" . $y;

if(strpos($x, "s")) {
    echo "$tijd seconden";
}
elseif(strpos($x, "m")) {
    echo "$tijd minuten";
}
elseif(strpos($x, "u")) {
    echo "$tijd uur";
}
else{
    echo "Geen tijd gevonden";
    exit;
}
