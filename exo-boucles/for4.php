<?php 
$carnetAdresses = [
    "Alice" => "alice@example.com",
    "Bob" => "bob@example.com",
    "Charlie" => "charlie@example.com",
    "David" => "david@example.com"
];

echo "Veuillez entrer le nom d'une personne à rechercher : ";
$nomRecherche = trim(fgets(STDIN));

$cles = array_keys($carnetAdresses);

for ($i = 0; $i < count($cles); $i++) {
    $nom = $cles[$i];

    $distance = levenshtein(strtolower($nom), strtolower($nomRecherche));
    
    if ($distance <= 2) {
        echo "Résultat trouvé ($nom) : " . $carnetAdresses[$nom] . "\n";
    }
}