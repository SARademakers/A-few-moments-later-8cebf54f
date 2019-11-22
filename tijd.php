<?php

$strings = explode(" ", $argv[1]);
$eindantwoord = 0;

foreach ($strings as $value) {

    $last = substr($value, -1);

    switch ($last) {
        case "s":
        $antwoord = (int)$value;
        $eindantwoord += $antwoord;
    break;
        case "m":
        $antwoord = (int)$value * 60;
        $eindantwoord += $antwoord;
    break;
        case "u":
        $antwoord = (int)$value * 3600;
        $eindantwoord += $antwoord;
    break;
        case "d":
        $antwoord = (int)$value * 86400;
        $eindantwoord += $antwoord;

    }
}

echo $eindantwoord;
?>