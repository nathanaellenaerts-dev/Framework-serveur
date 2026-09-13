<?php
function rechercheTransformationDonnees($products) {
    $prixFiltres = array_filter($products, function ($prix) {
        return $prix['prix'] < 10;
    });
    $infosProduits = array_map(function ($produit) {
        return [
            'nom' => $produit['nom'],
            'prix' => $produit['prix']
        ];
    }, $prixFiltres);
    $phrases = array_map(function ($produit) {
        return $produit['nom'] . ' : ' . $produit['prix'] . '€';
    }, $prixFiltres);

    $texteFinal = implode("\n", $phrases);
    return $texteFinal;
}


$products = [
    ['nom' => 'Produit A', 'prix' => 8.50],
    ['nom' => 'Produit B', 'prix' => 12.75],
    ['nom' => 'Produit C', 'prix' => 5.25],
    ['nom' => 'Produit D', 'prix' => 9.99]
];
$result = rechercheTransformationDonnees($products);
echo $result;
