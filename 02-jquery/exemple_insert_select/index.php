<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="ajax.js"></script>
	</head>
	<body>
		
		<form method="post" action="">
			<input type="text" id="prenom"  />
			<input type="submit" id="submit" value="Ajouter" />
		</form>
		
		
		<table border="1" id="employe">
		<?php
			require 'connexion.php';
			$employes = $pdo -> query("SELECT * FROM employes") -> fetchAll(PDO::FETCH_ASSOC);
			
			foreach($employes as $emp){
				echo '<tr>';
				echo 	'<td>' . $emp['id_employes'] . '</td>';
				echo 	'<td>' . $emp['prenom'] . '</td>';
				echo '</tr>';
			}
		?>	
		</table>
			
	<body>
</html>