<?php

$pdo = new PDO('mysql=host=localhost;dbname:bibliotheque', 'root', '');

SELECT livres.titre, livres.auteur, emprunts.date_rendu
FROM livres, emprunts
WHERE livres.id_livre=emprunts.id_livre
AND emprunts.date_rendu IS NULL


