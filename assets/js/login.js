// 
$('document').ready(function(){
	$('#login').click(function(e){
		e.preventDefault();
	
	var data =$('#login_user1').serialize();
	console.log(data);
	if(data !==""){
		$.ajax({
			url:'public/ajax.login.php',
			method:'POST',
			data:data,
			dataType:'json',
			success:function(resp){
					//alert(resp.msg);
					
					
					
					
					     $('.msg').text(resp.msg);
						  setTimeout(sending, 1000);
						
           			function sending()
           			{	
					if(resp.user=='admin'){
						$('.msg').delay(10000);
						window.location.href="index.php";}
						else{
							window.location.href="user.php";
						}
					if(resp.user==''){
						window.location.href="register.php";
					}
				}
				

			}
		})
	}
		
	});
	
});