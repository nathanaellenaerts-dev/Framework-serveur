<?php
function conversionCamelCase($texteAConvertir)
{

    $texte = ucwords($texteAConvertir);


    $texte = str_replace(" ", "", $texte);

    $texteFinal = lcfirst($texte);

    return $texteFinal;
}

echo conversionCamelCase("Bonjour tout le monde");
