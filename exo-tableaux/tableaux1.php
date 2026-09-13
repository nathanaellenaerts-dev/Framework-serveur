<?php
function filtrageTransformation(array $numbers) {
    $nombresPairs=array_filter($numbers,function($nombre){return $nombre%2==0;});
    $carre=array_map(function($nombre){return $nombre*$nombre;},$nombresPairs);
    return $carre;
}

// Exemple d'utilisation
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = filtrageTransformation($numbers);
print_r($result);
