<?php

function compterVoyellesEtConsonnes($texte)
{

    $texteMinuscule = strtolower($texte);
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
    $consonnes = [
        'b',
        'c',
        'd',
        'f',
        'g',
        'h',
        'j',
        'k',
        'l',
        'm',
        'n',
        'p',
        'q',
        'r',
        's',
        't',
        'v',
        'w',
        'x',
        'z'
    ];

    $nbVoyelles = 0;
    $nbConsonnes = 0;

    for ($i = 0; $i < strlen($texteMinuscule); $i++) {
        $lettre = $texteMinuscule[$i];

        if (in_array($lettre, $voyelles)) {
            $nbVoyelles++;
        } elseif (in_array($lettre, $consonnes)) {
            $nbConsonnes++;
        }
    }

    return "Il y a $nbVoyelles voyelles et $nbConsonnes consonnes";
}

$phrase = "Bonjour tout le monde";
echo compterVoyellesEtConsonnes($phrase);
