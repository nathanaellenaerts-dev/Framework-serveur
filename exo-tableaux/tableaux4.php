<?php
function manipulationDonnees($students)
{
    $etudiantsFiltres = array_filter($students, function ($etudiant) {
        return $etudiant['note'] > 80;
    });
    $infoEtudiants = array_map(function ($etudiant) {
        return [
            'nom' => $etudiant['nom'],
            'âge' => $etudiant['âge']
        ];
    }, $etudiantsFiltres);
    return $infoEtudiants;
}

// Exemple d'utilisation
$students = [
    ['nom' => 'Alice', 'âge' => 20, 'note' => 85],
    ['nom' => 'Bob', 'âge' => 21, 'note' => 75],
    ['nom' => 'Charlie', 'âge' => 19, 'note' => 90],
    ['nom' => 'David', 'âge' => 22, 'note' => 95]
];
$result = manipulationDonnees($students);
print_r($result);
