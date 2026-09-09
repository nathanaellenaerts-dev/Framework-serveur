<?php
$notes = [
    "Alice" => 15.5,
    "Bob" => 12.8,
    "Charlie" => 18.2,
    "David" => 14.9
];

$somme = 0;
$nombreEtudiants = 0;

foreach ($notes as $note) {
    $somme += $note;
    $nombreEtudiants++;
}

if ($nombreEtudiants > 0) {
    $moyenne = $somme / $nombreEtudiants;
    echo "La moyenne de la classe est : " . $moyenne . " / 20\n";
} else {
    echo "Le tableau de notes est vide.\n";
}
