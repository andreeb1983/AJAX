
$(document).ready(function(){
	// La suite sera éxécutée après le chargement de la page
	$("#submit").click(function(event){
		// on cible un evenement JS quel qu'il soit
		event.preventDefault(); // Annule le comportement initial du submit
		insertEmploye(); // On lance la fonction que l'on souhaite éxécuter
	});
	
	function insertEmploye(){
		var prenom = $("#prenom").val();
		var parameters = 'prenom=' + prenom;
		
		$.post('ajax.php', parameters, function(data){
			$("#employe").html(data.resultat);
			$("#prenom").val("");
		}, 'json');
	}
});

