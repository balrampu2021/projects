<?php
session_start();
//print_r($_SESSION);
//die;
        
  include_once('inc/db.php');
    include_once('inc/function.php');
  include_once('public/header.php');
  if(isset($_SESSION['admin']))

            { 
              session_destroy();
               header('location:login.php') ;
            }
  if(!isset($_SESSION['user']))
  {

               header('location:login.php') ;
  }
            //print_r($_SESSION);die;
            $id=$_SESSION['id'];
          $a=show_users_with_id($conn,$id);
          //print_r($a);die;
          //echo "<pre>";

         foreach ($a as $key => $value) {
            # code...
        

?>
  
    <!-- Side Navbar -->
   
    <div class="page" >
      <!-- navbar--> <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo BASE_URL;?>/assets/img/<?php echo $value['image'];?>" height="100" width="100" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5"><?php echo $value['username']?></h2><span></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        
     </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="user.php"> <i class="icon-home"></i>Home</a></li>
            <li><a href="index.php"> <i class="icon-home"></i>Profile</a></li>
             <li><a href="leaveForm.php"> <i class="icon-home"></i>Leave Form</a></li>
            <li><a href="showLeaveStatusUser.php"> <i class="icon-form" id="count"></i>Leave status</a></li>
            <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts</a></li>

         <li><a href="editUser.php?id=<?php echo $value['id'];?>&&name=<?php echo $value['username'];?>&&email=<?php echo $value['email'];?>"> <button>Update profile</button></a></li>
            <li> <a href="uploadPicture.php"> <button>Upload profile picture</button></a></li>
        
            <?php
            //print_r($_SESSION['user']);di            if(!isset($_SESSION['user']))   
            { 
           echo '<li><a href="<?=BASE_URL?>/login.php"> <i class="icon-interface-windows"></i>Login page</a></li>';
          }
         

            ?>
           
          </ul>
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
                <li class="nav-item"><a href="<?=BASE_URL?>logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
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
      <form>
        
      </form>
      <div style='display: inline; margin-left:200px;' class="row ml-5">
        <div class="col-md-12 ml-5 " style="display:inline;">
          <div class='col-md-6' style="display:inline;">Today time</div>
          <div class='col-md-6 bg-danger'style="display:inline;" id="time"></div>

        </div>
      </div>


      
    

<?php } ?>
  
    </nav>


<div class="container">
  <div class="timer">TIME:</div>
  <form>
    <div class="col-sm-3" style="height:130px;display: inline;">
        <div class="form-group">
          
            <div  style='' class='input-group date' id='datetimepicker10'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                   

                </span>

            </div>
            
             
        
        </div>
    </div>
     <form> 
     <div class="col-sm-2" style="height:130px;display: inline;">
       <input type="text" name="task" placeholder="things to do"  class=" form-control"/>
    </div >
    <div class="col-sm-2" style="height:130px;display: inline;">
       <input type="button"  id="start" name="task" placeholder="start"  value="start"class="form-control"/>
    </div >
    
    <div class="col-sm-2" style="height:130px;display: inline;">
       <input type="button" name="task" placeholder="stop" id="stop"  value="stop"class=" form-control"/>
    </div >
  <h1><p id="output">
    
      <!-- <b class='c'>00</b>
      <b class='b'>00</b>
      <b class='a'>00</b> -->
       <span class="zh">0</span><span class="c">0</span>
       <span class="zm">0</span><span class="b">0</span> 
      <span class="zs">0</span><span class="a">0</span>

      </p>
      
      

      
    
   
    </form>
    









   







<script type="text/javascript">

 
      function checkin() {

    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
  
    min = checkTime(min);
    sec = checkTime(sec);

      function checkTime(i) {
          if (i < 10) {
              i = "0" + i;
          }
          return i;
      }

      if(hr>12){
        hr=hr-12;
        if(hr==12)
        {
            hour = checkTime(hr);
          document.getElementById("time").innerHTML = hr+":"+min+":"+sec+" AM";
        }
        else
        {
            hr = checkTime(hr);
            document.getElementById("time").innerHTML = hr+":"+min+":"+sec+" PM";
        }

      }
      else
      {
        document.getElementById("time").innerHTML = hr+":"+min+":"+sec+" AM";
      }
    //document.getElementById("clock").innerHTML = hr + " : " + min + " : " + sec;
    document.getElementById("time").innerHTML = hr + " : " + min + " : " + sec + " PM";
    //a=hr + " : " + min + " : " + sec;


   
         var time = setTimeout(function(){ checkin() }, 500);

}

    

 
  $(function () {
            $('#datetimepicker10').datetimepicker({minDate: new Date(),
                viewMode: 'months',
                format: 'DD/MM/YYYY'
            });
        });
  
  var i;
  var a;
      $a=$('#start').click(function(){
        $('#start').prop('disabled',true);
        $i=setInterval(function(){

               var hr = $('.c').text()*1;
               var mn = $('.b').text()*1;
              var sc = $('.a').text()*1;
                    
               if(sc < 60){
                          
                       $('.a').text(sc + 1);
                        if(sc<9)
                        {
                          $(".zs").css("display", "inline");
                        }
                       else
                        {
                          $(".zs").css("display", "none");
                       }

                  }
                  else{$('.a').text(1);
                       if(mn < 60){
                           if(mn<9)
                        {
                          $(".zm").css("display", "inline");
                        }
                        else
                        {
                          $(".zm").css("display", "none");
                        }
                      $('.b').text(mn + 1);
                 }else{$('.b').text(1);

                   if(hr<9)
                        {
                          $(".zs").css("display", "inline");
                        }
                        else
                        {
                          $(".zs").css("display", "none");
                        }
              $('.c').text(hr + 1);

             
               }
                }


             
               }, 1000);

        
             
      });
          




      $('#stop').click(function(){
      
        clearInterval($i);
        $('#start').prop('disabled',false);
       
 });
       

  

  </script>
  <script>



  
        $(function () {
            $('#datetimepicker10').datetimepicker({minDate: new Date(),
                viewMode: 'months',
                format: 'DD/MM/YYYY'
            });
        });
  </script>
  <script type="text/javascript">
      var timeoutInMiliseconds = 60000;
      var timeoutId; 

    function startTimer()
    {
      timeoutId = window.setTimeout(doInactive, timeoutInMiliseconds)

    }
    function doInactive() {

    }
    function resetTimer() { 
    window.clearTimeout(timeoutId)
    startTimer();
}
    function setupTimers () {
    document.addEventListener("mousemove", resetTimer, false);
    document.addEventListener("mousedown", resetTimer, false);
    document.addEventListener("keypress", resetTimer, false);
    document.addEventListener("touchmove", resetTimer, false);
     
    startTimer();
}

  </script>
  


  <?php
     include_once('public/footer.php');
  ?>



     

      