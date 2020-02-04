$('document').ready(function(){

	$('#register').click( function(){
		
		var data = $('#register_form').serialize();
		if( data !== ""){
			$.ajax({
				url:'public/ajax.register.php',
				method:'POST',
				data:data,
				dataType:'json',
				success:function(res){
					if(res.error == false){
						alert(res.success);
						window.location.href="login.php";
					}else{
						alert(res.error);
					}
				}
			});
		}
	});
});

