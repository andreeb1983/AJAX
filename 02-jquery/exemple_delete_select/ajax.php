<?php

require 'connexion.php';

extract($_POST);
// $id = 15

$resultat = $pdo -> prepare("DELETE FROM employes WHERE id_employes= :id");
$resultat -> bindParam(':id', $id, PDO::PARAM_INT);
$resultat -> execute();

$resultat = $pdo -> query("SELECT * FROM employes");

$tab['resultat'] = "";

while ($employes = $resultat -> fetch(PDO::FETCH_ASSOC)){
    $tab['resultat'] .= '<option value="' . $employes['id_employes'] . '" >'. $employes['prenom'] .'</option>';
}

$tab['validation'] = 'OK';

echo json_encode($tab);
