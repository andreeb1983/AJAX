<?php
	$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');
	$employes = $pdo -> query("SELECT * FROM employes LIMIT 0,10") -> fetchAll(PDO::FETCH_ASSOC)
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="scroll.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="scroll.js"></script>

	</head>
	<body>
		<header>
		</header>
		<main id="content">
			
			<?php foreach($employes as $emp) : ?>
				<div class="item">
					<h3><?= $emp['prenom'] ?></h3>
				</div>
			<?php endforeach; ?>
		</main>
	</body>
</html>