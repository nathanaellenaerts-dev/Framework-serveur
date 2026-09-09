<?php
echo "Veuillez entrez une nombre entier positif: ";
$nombre= intval(fgets(STDIN));
if($nombre>0)
    {
        $factorielle=1;
        for($i=1;$i<=$nombre;$i++){
            $factorielle*=$i;
            
        }
        echo "la factorielle de " . $nombre . " est : " . $factorielle;
    }