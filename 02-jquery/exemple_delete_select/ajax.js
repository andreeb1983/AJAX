// fonction permettant de lancer les traitement à l'évènement "click" :
$(document).ready(function(){
    // la suite sera exécutée après le chargement de la page
    $("#submit").click(function(event){
        // on cible un évènement JS quel qu'il soit

        event.preventDefault(); // annule le comportement initial du bouton submit (l'empèche de recharger la page)
        deleteEmploye();    // on lance la ou les fonction(s) que l'on souhaite exécuter
    });


    function deleteEmploye(){   // on crée la ou les fonctions d'on ont a besoin
        var id = $("#employe").find(":selected").val();
        var parameters = 'id=' + id;
        // on récupère ici, l'ID de la personne à supprimer. On le fait grâce à la 'value de l'option sélectionnée dans le champ id=employe
        $.post('ajax.php', parameters, function(data){

            if(data.validation == 'OK'){
                $("#employe").html(data.resultat);
            }
        }, 'json');
    
    /*
    la fonction post() de Jquery, me permet de lancer une requête HTTP et transmettre des infos en post.//#endregionNous souhaitons exécuter le fichier ajax.php et lui transmettre en post l'id ($_POST['id'] = 12).
    la fonction post de Jquery récupère la réponse en troisième argument, et nous permet de la traiter dans la fonction.
    cette fonction peut récupérer la réponse affichée dans le fichier PHP, sous forme d'un tableau JSON (data), qui contient des éléments(data.validation).
    Le tableau data que l'on récupère correspond à l'array PHP qui a été encodé dans le fichier php(echo json_encode($tab))
    */

    }
});