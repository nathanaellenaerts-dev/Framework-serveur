<?php
function calculStatistique($numbers) {
    $count=count($numbers);
    $somme=array_reduce($numbers, function($accumulateur,$nombre){return $accumulateur+$nombre;},0);
    $moyenne=$somme/$count;
    return $moyenne;
}

// Exemple d'utilisation
$numbers = [10, 15, 20, 25, 30];
$result = calculStatistique($numbers);
echo "La moyenne est : " . $result;
