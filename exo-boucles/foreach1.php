<?php
$nombres = [15, 7, 22, 13, 9];

// Initialisez la variable pour stocker le plus grand élément
$maximum=$nombres[0];

// Utilisez la boucle foreach pour rechercher le plus grand élément
foreach($nombres as $nombre)
    {
        if($nombre > $maximum)
            {
                $maximum=$nombre;
            }
    }
echo $maximum;


