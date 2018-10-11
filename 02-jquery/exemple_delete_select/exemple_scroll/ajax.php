<?php
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');

extract($_POST);

$requete = "SELECT * FROM employes LIMIT $offset, 10";
$resultat = $pdo -> query($requete);
$employes = $resultat -> fetchAll(PDO::FETCH_ASSOC);


$data['content'] = '';

foreach($employes as $emp){
	$data['content'] .= '<div class="item">';
	$data['content'] .=	'<h3>' . $emp['prenom'] . '</h3>';
	$data['content'] .= '</div>';
}

echo json_encode($data);

	
	
	
