$('document').ready(function(){

	$('#register').click( function(e){
		e.preventDefault();
		var data = $('#register_form').serialize();
		if( data !== ""){
			$.ajax({
				url:'public/ajax.register.php',
				method:'POST',
				data:data,
				dataType:'json',
				success:function(res){
					if(res.success)
					{
						$('.msg').text(res.success);
					    setTimeout(sending, 2000);
					}
					else{
							$('.msg').text(res.error)
					}
					
					function sending()
					{
					if(res.error == false){
							
					 window.location.href="login.php";
						
					}
						
					}





				}
			});
		}
	});
});

