<?php
$carnetAdresses = [
"Alice" => "alice@example.com",
"Bob" => "bob@example.com",
"Charlie" => "charlie@example.com",
"David" => "david@example.com"
];

echo "Veuillez entrer le nom d'une personne à rechercher : ";
$nomRecherche = trim(fgets(STDIN));

// Utilisez une boucle for pour rechercher la personne dans le carnet d'adresses
$cles = array_keys($carnetAdresses);

for ($i = 0; $i < count($cles); $i++) {
    $nom = $cles[$i];
    if($nom==$nomRecherche)
        {
            echo $nom . " - adresse e-mail: " . $carnetAdresses[$nom] ."\n" ;
        }

}

