$('document').ready(function(){

	$('#leave').click( function(e){
		
		e.preventDefault(); 
		var data = $('#leave_id').serialize();
		console.log(data);
		if( data !== ""){
			$.ajax({
				url:'public/ajax.leavee.php',
				method:'POST',
				data:data,
				dataType:'json',
				success:function(res){
					if(res.error == false){
						alert(res.success);
						window.location.href="user.php";
					}else{
						alert(res.error);
					}
				}
			});
		}
	});
});