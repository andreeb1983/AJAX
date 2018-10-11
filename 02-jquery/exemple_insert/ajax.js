// fonction permettant de lancer les traitement à l'évènement "click" :
$(document).ready(function(){
    $("#submit").click(function(event){
        event.preventDefault(); // annule le comportement initial du bouton submit (l'empèche de recharger la page)
        insertEmploye();
    });

     
    function insertEmploye(){
        prenom = $('#prenom').val();
        parameters = 'employe='+ prenom;
        console.log(parameters);

        $.post("ajax.php", parameters, function(data){  // dat contient ce que le PHP nous retourne, à savoir un objet Json, ou à l'indice "validation" il y aura "ok" ou "erreur"
        console.log(data);
            if(data.validation == 'OK'){
                $('#resultat').append('<p style=background:green; color:white; padding:5px>L\'employé a été enregistré.</p>');
                $('#prenom').val("");   // on vide le champ prénom
            }            
        }, 'json');         
        console.log('toto');    
    }
});

