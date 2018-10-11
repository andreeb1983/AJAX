/*
Exercice :

    Ajouter un nouvel employe en AJAX

        prenom, nom, sexe, service, salaire
*/


// fonction permettant de lancer les traitement à l'évènement "click" :
$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault(); // annule le comportement initial du bouton submit (l'empèche de recharger la page)
        insertEmploye();
    });

     
    function insertEmploye(){
       
        var parameters = {
            'prenom' : $('#prenom').val(),
            'nom' : $('#nom').val(),
            'sexe' : $('#sexe').find(":selected").val(),
            'service' : $('#service').val(),
            'salaire' : $('#salaire').val(),
        };
        console.log(parameters);

        $.post("ajax.php", parameters, function(data){  // data contient ce que le PHP nous retourne, à savoir un objet Json, ou à l'indice "validation" il y aura "ok" ou "erreur"
        console.log(data);
            if(data.validation == 'OK'){
                $('#resultat').html('<p style=background:green; color:white; padding:5px>L\'employé a été enregistré.</p>');
                $('#prenom').val("");   // on vide le champ prénom
                $('#nom').val("");  // on vide le champ nom
                $('#sexe').val("f");   // on vide le champ sexe
                $('#service').val("");    // on vide le champ service
                $('#salaire').val("");    // on vide le champ salaire
            }            
        }, 'json');         
        console.log('toto');    
    }
});

