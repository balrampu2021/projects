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
    $role_id=0;        
    $a=show_users($conn,$role_id); 

?>



	
    <!-- Side Navbar -->
   
    <div class="page">
      <!-- navbar--> <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Netzila</h2><span>Web Developer</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"> <i class="icon-home"></i>Home                             </a></li>
             <li><a href="leave_status.php"> <i class="icon-grid"></i>Leaves                            
            <li><a href="table.php"> <i class="icon-grid"></i>Details                            </a></li>
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
        
      </div>
    </nav>
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong class="text-primary">Dashboard</strong></div></a></div>
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
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="<?=BASE_URL?>assets/img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2"><span>French                                                         </span></a></li>
                  </ul>
                </li>
				
                <!-- Log out-->
                <li class="nav-item"><a href="logout.php?logout=<?php echo $value['id'];?>"><span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
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
	 </br>
	 </br>
	  <div class="container">
           <div class="row">
	          <table border="2" id="table" width="100%" class="display" ">
			   <form action="" method="post" enctype="multipart/form-data">
           <thead>
              <tr>
			    
                  <th>ID</th>
				 <th>Image</th>
                  <th>USERNAME</th>
				   <th>Email</th>
				    <th>Department</th>
                  <th>CREATED ON</th>
				  <th>DELETE</th>
				  <th>EdIT</th>
				  
              </tr>
			  </thead>
              <?php
             
                   //print_r($a);die;
                   foreach ($a as $key => $value) {
                    // print_r($value) ;
                    ?>
					<tbody>
                    <tr>

                    <td><?php echo $value['id']; ?></td>
					
                    <td><img src="<?php echo BASE_URL;?>assets/img/<?php echo $value['image'];?>" width="100" height="100"></td>
                    <td><?php echo $value['username']; ?></td>
					 <td><?php echo $value['email']; ?></td>
					 <td><?php echo $value['department']; ?></td>
                   
                    <td><?php echo $value['created_on']; ?></td>
					<td><a href="delete.php?id=<?php echo $value['id'];?>"><button class="btn btn-primary">Delete</button></a></td>
					<td><a href="update.php?edit=<?php echo $value['id'];?>"><button class="btn btn-danger">Edit</button></a></td>
					
				
                    
                  </tr>
				  </tbody>
				  
                  <?php
				

                   }
                  

                
              ?>
                
          </form>

        </table>
   </div>
   </div>
   <script>
   $(document).ready(function(){
 $('#table').DataTable();
});
   </script>
   

	   <?php include_once('public/footer.php');?>
	   