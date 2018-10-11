$(document).ready(function(){
	scrollInfini();
	
	function scrollInfini(){
		$("#content").append('<div id="loader"></div>');
		var offset = 10;
		
		console.log('test');
		
		
		
		$(window).scroll(function(){
			
			// console.log($(window).scrollTop());
			// console.log($(window).height());
			// console.log($(document).height());
			
			if(($(window).scrollTop() + $(window).height()) > $(document).height()){
				
				$("#content #loader").fadeIn(400);
				
				var parameters = 'offset=' + offset;
				$.post('ajax.php', parameters, function(data){
					if(data.content != ''){
						$("#content").append(data.content);
						//$("#content #loader").before(data.content);
						offset += 10;
						console.log(offset);
					}
				}, 'json')

				$("#content #loader").fadeOut(400);
			}
		});
	}
});