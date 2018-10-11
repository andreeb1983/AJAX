<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="ajax.js"></script>
    </head>
    <body>
        <form action="" method="post">
            <select name="employe" id="employe">
                <?php
                    require 'connexion.php';
                    $employes = $pdo -> query("SELECT * FROM employes") -> fetchAll(PDO::FETCH_ASSOC);   
                    
                    foreach ($employes as $emp) {
                        echo '<option value="'. $emp['id_employes'] .'">' . $emp['prenom'] . '</option>';
                    }
                ?>
            </select>
            
            <input type="submit" id="submit" value="Supprimer"/>
        </form>

        
    </body>
</html>