<?php

do {
    echo "Entrez un mot de passe valide : ";
    $motDePasse = readline();

    $invalide = strlen($motDePasse) < 8 || !preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/', $motDePasse);

    if ($invalide) {
        echo "Le mot de passe doit contenir minimum 8 caractères, une majuscule, une minuscule et un chiffre." . PHP_EOL . PHP_EOL;
    }
} while ($invalide);

echo "Le mot de passe est valide !";
