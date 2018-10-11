<?php

require 'connexion.php';

extract($_POST);

// $_POST = array(
//     'employe' => 'naya'
// );
$resultat = $pdo -> prepare("INSERT INTO employes (prenom, nom, sexe, service, salaire) VALUES (:prenom, :nom, :sexe, :service, :salaire)");

$resultat -> bindParam (':prenom', $employe, PDO::PARAM_STR);
$resultat -> bindParam (':nom', $employe, PDO::PARAM_STR);
$resultat -> bindParam (':sexe', $employe, PDO::PARAM_STR);
$resultat -> bindParam (':service', $employe, PDO::PARAM_STR);
$resultat -> bindParam (':salaire', $employe, PDO::PARAM_STR);

//-------------------------

$resultat = $pdo -> query("SELECT * FROM employes");
$tab['resultat'] = '';

while($employes = $resultat -> fetchAll(PDO::FETCH_ASSOC)){
    $tab['resultat'] .= '<tr>';
    $tab['resultat'] .= '<td>' . $employes['prenom'] . '</td>';
    $tab['resultat'] .= '<td>' . $employes['nom'] . '</td>';
    $tab['resultat'] .= '<td>' . $employes['sexe'] . '</td>';
    $tab['resultat'] .= '<td>' . $employes['service'] . '</td>';
    $tab['resultat'] .= '<td>' . $employes['salaire'] . '</td>';
    $tab['resultat'] .= '</tr>';
}


echo json_encode($tab);