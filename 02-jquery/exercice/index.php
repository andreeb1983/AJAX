<!DOCTYPE html>
<html lang="fr">
<head>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
    
    <title>Document</title>
</head>
<body>

    <h3>Ajouter un nouvel employé :</h3>

    <form action="" method="post">
        <input type="text" name="prenom" id="prenom" placeholder="prenom"><br><br>
        <input type="text" name="nom" id="nom" placeholder="nom"><br><br>

        <select name="sexe" id="sexe">
            <option value="f">f</option>
            <option value="m">m</option>
        </select><br><br>

        <input type="text" name="service" id="service" placeholder="service"><br><br>
        <input type="text" name="salaire" id="salaire" placeholder="salaire"><br><br>
        <input type="submit" value="OK" id="submit">    
    </form>

    <div id="resultat"></div>
    
</body>
</html>


