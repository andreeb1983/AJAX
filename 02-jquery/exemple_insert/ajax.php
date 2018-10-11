<?php

require 'connexion.php';

extract($_POST);

// $_POST = array(
//     'employe' => 'naya'
// );
$resultat = $pdo -> prepare("INSERT INTO employes (prenom) VALUES (:prenom)");
$resultat -> bindParam (':prenom', $employe, PDO::PARAM_STR);

if($resultat ->execute()) {
    $tab['validation'] = 'OK';
}
else {
    $tab['validation'] = 'Erreur';
}

echo json_encode($tab);