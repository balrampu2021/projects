<?php
session_start();

     
	include_once('inc/db.php');
    include_once('inc/function.php');
	include_once('public/header.php');
  if(!isset($_SESSION['user']))
            { 
               header('location:login.php') ;
            }
			$username=$_SESSION['user'];
			
			$email=$_SESSION['email'];
			  
			$department=$_SESSION['department'];
		
			$user_id=$_SESSION['id'];
			
			$time=$_SESSION['time'];
			
			
  
  $a=select_time($conn);
 


  
 

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
			
             
          
            
          </ul>
        </div>
        
      </div>
    </nav>
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Dashboard</strong></div></a></div>
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
      </header>
      <!-- Counts Section -->
    
    
      <section>
	   <div class="container">
           <div class="row">
	          <table  border="2"   width="100%"  >
			  <style> 

</style>
			    
           <thead>
              <tr>
			  <th>USERNAME</th>
				   <th>Email</th>
				    <th>Department</th>
					<th>user_id</th>
					<th>Total Time</th>
					<th>taskdone</th>
					<th>Pending time</th>
			    
                 
				</tr>
			  </thead>
			  <?php
	
			foreach($a as $key=>$value){
				
			
				 
				 
				 ?>
	
					<tbody>
                    <tr>

					
                    
                    <td><?php echo $value['username']; ?></td>
					 <td><?php echo $value['email']; ?></td>
					 <td><?php echo $value['department']; ?></td>
					 <td><?php echo $value['user_id']; ?></td>
					 <th>2hr</th>
					 
					 <td><?php echo $value['time'];?>min</td>
					 
                    
					
					
				
                    
                  </tr>
				  </tbody>
				 
                  
				<?php

                   }
                  

                
              ?>
                
      </table>  

       
   </div>
   </div>
   </section>
      
        
      <?php include_once('public/footer.php');?>
      