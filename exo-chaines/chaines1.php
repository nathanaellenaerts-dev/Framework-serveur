<?php

function assemblerchaines(){
    $chaine1 = ["Je", "Tu", "Il"];
    $chaine2 = ["mange", "vois", "aime"];
    $chaine3 = ["une pomme", "la télé", "la programmation"];
    $sujet=array_rand($chaine1);
    $verbe=array_rand($chaine2);
    $complements=array_rand($chaine3);

    echo $chaine1[$sujet] . " " . $chaine2[$verbe] . " " . $chaine3[$complements];

}
assemblerchaines();