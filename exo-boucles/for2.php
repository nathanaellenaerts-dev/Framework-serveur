<?php
echo "Veuillez entrer une chaîne de caractères : ";
$chaine = trim(fgets(STDIN));

// Initialisez la variable pour stocker la chaîne de caractères inversée
$chaineInversee= "";

// Utilisez une boucle for pour inverser la chaîne de caractères
for($i=strlen($chaine)-1;$i>=0;$i--)
    {
        $chaineInversee.= $chaine[$i];
    }

// Affichez la chaîne de caractères inversée
echo "chaine inversée= " . $chaineInversee;
