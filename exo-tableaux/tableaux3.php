<?php
function triPersonnalise($strings) {
    usort($strings, function ($a, $b) {
        return strlen($a) <=> strlen($b);
    });
    return $strings;
}



// Exemple d'utilisation
$strings = ["abcd", "ef", "ghijk", "lmnopq", "r"];
$result = triPersonnalise($strings);
print_r($result);