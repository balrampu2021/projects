

<?php
session_start();
//print_r($_SESSION);
//die;
        
	include_once('inc/db.php');
    include_once('inc/function.php');
	include_once('public/header.php');
  if(!isset($_SESSION['user']))
            { 
               header('location:login.php') ;
            }
   $id=$_SESSION['id'];
   
 
   $username=$_SESSION['user'];
   $email=$_SESSION['email'];
   //print_r($email);die;
  // print_r($username);die;
		       $b=time_select($conn,$id);
	//print_r($b);die;
			  $a=select_users($conn,$id);
			
		
	
	 ob_start();
//Get the ipconfig details using system commond
system('ipconfig');
 
// Capture the output into a variable
$mycom=ob_get_contents();
//echo $mycom;die;
// Clean (erase) the output buffer
ob_clean();
 
$findme = "IPv4";
//Search the "Physical" | Find the position of Physical text
$ip = strpos($mycom, $findme);

 

$ipadd=substr($mycom,($ip+36),30);

$ipaddfinal= trim($ipadd,"( Subnet Mask .)");
$_SESSION['ipadd']= $ipaddfinal;
//		
?>
	
    <!-- Side Navbar -->
   
    <div class="page">
      <!-- navbar--> <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="" class="img-fluid rounded-circle">
            <h2 class="h5">Netzila</h2><span>Web Developer</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"> <i class="icon-home"></i>Home</a></li>
			<li><a href="leave.php"> <i class="icon-grid"></i>Leaves</a></li> 
			 <li><a href="date.php"><i class="icon-form"></i>Datepicker 
			</a></li>
             
			  
			 
                                     
			  
          
          
		
		
			
			
			
            <?php
            //print_r($_SESSION['user']);die;
            if(!isset($_SESSION['user']))
            { 
           echo '<li><a href="<?=BASE_URL?>/login.php"> <i class="icon-interface-windows"></i>Login page</a></li>';
          }
         

            ?>
            
          </ul>
        </div>
        
      </div>
    </nav>
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Employee NUmber Of hours</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
               
				
                <!-- Log out-->
                <li class="nav-item"><a href="<?=BASE_URL?>" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                 <?php
            //print_r($_SESSION['user']);die;
            if(!isset($_SESSION['user']))
            { 
                echo' <li class="nav-item"><a href="login.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Login</span><i class="fa fa-sign-out"></i></a></li>';
               
          
          
         
               echo' <li class="nav-item"><a href="register.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Register</span><i class="fa fa-sign-out"></i></a></li>';
                }
                 ?>
              </ul>
            </div>
          </div>
        </nav>
	
	  </br></br></br>
	  <html>
<head>

<link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="./css/prettify-1.0.css" rel="stylesheet">
        <link href="./css/base.css" rel="stylesheet">
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        
        
        <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
</head>


	  
	
	  
	  <form action="" align="center" id="leave_id"  method="post" enctype="multipart/form-data">
		 <?php
             
                   //print_r($a);die;
                   foreach ($a as $key => $value) {
					 
                  
                    ?>
				<div class="container">	
          <div class="sidenav-header-inner "><img src="<?php echo BASE_URL; ?>assets/img/<?php echo $value['image'];?>" height="200" width="200" alt="person" class="img-fluid rounded-circle">
            
          </div>
		  Name:<?php echo $value['username'];?></br>
		  Email_id:<?php echo $value['email'];?></br>
		  Department:<?php echo $value['department'];?></br>
	
    
		   
		  
		
		
		
		 
		  

		
          
		  
		        <?php
				
				   }
				   ?>
				   </form>
				   <form align="center" method="post">
          <div class="container">
    <div class="col-sm-3" style="height:130px;">
        <div class="form-group">
            <div class='input-group date' id='datetimepicker10'>
                <input type='text' class="form-control" />
				
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
            </div></br></br>
			
			<div>
			<div class="container">
    <div class="col-sm-8" style="height:130px;">
        <div class="form-group">
			
			<input type="text" name="t1" placeholder="Enter your order">
			
			
			<h1><p id="output">
			
			<span class='az'>0</span><span class='a'>0</span></b>
			:<span class='ab'>0</span><span class='b'>0</span>
			:<span class='ac'>0</span><span class='c'>0</span>
			<div class='d'><b class='e'>00</b>
			:<b class='f'>00</b>
			:<b class='g'>00</b></div>
			</p>
			
			</h1>
			<button type="button" id='bb'  class="btn btn-success kk">Start</button>
		<button type="button" id='cc'  class="btn btn-success">Stop</button>
			<button type="button" id='dd'  class="btn btn-success">show</button>
			
			<div class="countdown"></div>
			
			</div>
			</div>
			</div>
        </div>
    </div>
    
</form>

				 <html>
				 <head>
				 </head>
				 <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({minDate: new Date(),
                viewMode: 'months',
                format: 'DD/MM/YYYY'
            });
			
        });
		
		var interval
		
		$('.btn.btn-success.kk').click(function(){
			
			$('#bb.kk').prop("disabled",true);
			
			$interval =	setInterval(function(){
               var hr = $('.a').text()*1;
			   
               var mn = $('.b').text()*1;
			   
                  var sc = $('.c').text()*1;
               if(sc < 60){
				   if(sc<=9 || sc==0){
					   $(".ac").css("display","inline");
				   }
				   else{$(".ac").css("display","none");}
                 $('.c').text(sc + 1);

				   }else{$('.c').text(1);
                       if(mn < 60){
						   if(mn<=9 || mn==0){
							   $(".ab").css("display","inline");
						   }
						   else{$(".ab").css("display","none");}
             $('.b').text(mn + 1);
                 }else{$('.b').text(1);
              $('.a').text(hr + 1);
               }
                }
               }, 1000);
		         
		
		});
				 
			$('#cc').click(function(){
					
			$('#bb').addClass('kk');
			

	$('#bb.kk').prop("disabled",false);
                 clearInterval($interval);
				 var sc=$('.c').text();
				 var mn=$('.b').text();
				 var hr=$('.a').text();
				
				});
				
				$('#dd').click(function(){
					var sc1=$('.c').text()*1;
				    var sc2=$('.g').text()*1;
			      var sc2=sc1+sc2;
					
					$('.c').text("00");
					$('.g').text(sc2);
					 
					
					
					
				});
				
		
	/** Testing**/ 	   
        var current_time = <?=$b;?>;
		//current_time.split(", ");
			console.log(current_time[0]);
			if( current_time !== "" ){
				if(current_time[2]< 9)
				{
						$(".ac").css("display","inline");
						$(".a").text(current_time[0]);
				}
				else{
					$(".ac").css("display","none");
						$(".a").text(current_time[0]);
				}
				
				$(".b").text(current_time[1]);
				$(".c").text(current_time[2]);
			}
		  $("#cc").click(function(e){
			  
			e.preventDefault();
			
		var stop_time = [$(".a").text()*1, $(".b").text()*1, $(".c").text()*1];
			console.log(stop_time);	
			
			if( stop_time !== "" ){
				$.ajax({
					url:'./public/ajax_stopped_time.php',
					method:'POST',
					data:{stop_time:stop_time},
					success:function(res){
						//console.log(res);
					}
				});
			}
		});
		
    </script>
</div>
				 
	

        
        
    
      