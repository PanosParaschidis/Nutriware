<?php
  session_cache_limiter('private, must-revalidate');
session_cache_expire(60);
header('Content-Type: text/html; charset=utf-8');
$username="panos";$password="123456";$database="nutriware";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    mysqli_set_charset($conn, "utf8");
        session_start();
        if(!isset($_SESSION['status'])){
          header("Location: login.html"); 
     }
     
     $Nuname=$_SESSION["uname"];
     $sql="SELECT * FROM `nutritionist` WHERE `Username` = '$Nuname' ";
     $res=mysqli_query($conn, $sql);
     $row= mysqli_fetch_assoc($res);
     $nid=$row['Nid'];
     
   $sql1="SELECT * FROM `client` WHERE `Nid` = '$nid' ORDER BY `Username` ASC ";
     $res1=mysqli_query($conn, $sql1);
     echo "
<html>
                     <head>
       
          <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
<link rel='icon' href='favicon.ico' type='image/x-icon'>
    <link rel='stylesheet' href='bootstrap/css/bootstrap.min.css' type='text/css'/>
    <link rel='stylesheet' href='bootstrap/css/bootstrap.css' type='text/css'>
        
        <link rel='stylesheet' href='mycss.css' type='text/css'/>

         <script type='text/javascript'  src='myjavascript.js'></script>
          <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
          <script type='text/javascript'  src='bootstrap/js/bootstrap.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Nutriware</title>
 

    
    </head>
    <body>
     
        <div class='container-fluid' id='grad1'>
      <nav class='navbar navbar-default' style='background-color:inherit; border:none; '>
        <div class='container-fluid'>
          <div class='navbar-header'>
              
              <h1 class='pull-left' style='font-family: Berlin Sans Fb; font-size: 50px; color: #F4F4F4 '>Nutriware</h1>
          </div>
          
            
             
             <div class='navbar-collapse collapse' >
                  <ul class='nav nav-pills navbar-right' id='topmenu'>
    
                <li><a href='profile.php'>????????????</a></li>
                <li><a href='comm.php'>??????????????????????</a></li>
                <li><a href='faq.php''>???????????? ??????????????????</a></li>
                <li><a href='signout.php'>????????????????????</a></li>
            </ul>      
          </div>
            
            
             <ul class='nav nav-pills navbar-right' id='choicemenu'>
                 <li><a href='#' class='menuButton' onclick='openNav()'>??????????</a> </li>
             </ul>
          
        </div>
      </nav>
     </div>
        <div id='bread' class='pull-left'>
            <ol class='breadcrumb'>
            <li><a href='profile.php'>????????????</a></li>
            <li><a href='profile.php'>??????????????</a></li>
            <li class='active'>?????? ????????????????</li>        
          </ol>
        </div>
        
   
    
    
    
        <div id='date' class='container'>
        <form class='form-horizontal' action='exec_appoint2.php' method='post' >
            <br><br>
                  <h2>?????? ????????????????</h2>
                <div class='form-group'>
                  <label class='control-label col-sm-2' for='client'>??????????????:</label>
                  <div class='col-sm-4'>
                       <select class='form-control' id='client' name='client'>
                           <option value=''> </option>
                           ";
       if(mysqli_num_rows($res1)>0){
        while($row1= mysqli_fetch_assoc($res1)){ 
     echo " 
                         <option value='".$row1['Username']."'>".$row1['Fname']." ".$row1['Lname']."</option>
                        ";
       }
       
        }
     echo " 
                      </select>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='control-label col-sm-2' for='day'>??????????:</label>
                  <div class='col-sm-4'>
                    <input type='date' class='form-control' id='day' name='day'>
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='hour'>??????:</label>
                  <div class='col-sm-4'>
                    <input type='time' class='form-control' id='hour' name='hour'>
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='comments'>????????????:</label>
                  <div class='col-sm-4'>
                      <textarea  class='form-control' id='comments' name='comments' placeholder=' '></textarea>
                  </div>
                </div>
                 <div class='form-group'>
                  <div class='col-sm-offset-2 col-sm-2'>
                    <button type='submit' class='btn btn-default'>????????????????????</button>
                  </div>
                </div>
             
	  
                    </form>
      
        </div>
        
        
        
<!--hidden sidebar -->
            <div id='mySidenav' class='sidenav'>
                <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
                <a href='clients.php'>???? ?????????????? ??????</a>
                <a href='newclient.html'>???????? ??????????????</a>  <hr>
                <a href='newdiet.php'>???????????????????? ????????????????????????</a>
                <a href='equals.html'>?????????????????????? ????????????????????</a>
                 <a href='tables.php'>?????????????? ???????????????? ????????????????</a>  <hr>
                  <a href='appointment.php'>?????? ????????????????</a>
                  <a href='calendar.php'>????????????????????</a>
              </div>
 
       
            <div id='mySidenav1' class='sidenav'>
  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
  <a href='profile.php'>????????????</a> <hr>
  <a href='clients.php'>???? ?????????????? ??????</a>
  <a href='newclient.html'>???????? ??????????????</a>  <hr>
  <a href='newdiet.php'>???????????????????? ????????????????????????</a>
  <a href='equals.html'>?????????????????????? ????????????????????</a>
   <a href='tables.php'>?????????????? ???????????????? ????????????????</a>  <hr>
    <a href='appointment.php'>?????? ????????????????</a>
    <a href='calendar.php'>????????????????????</a> <hr>
      <a href='comm.php'>??????????????????????</a>
      <a href='faq.php'>???????????? ??????????????????</a>
      <a href='signout.php'>????????????????????</a>
    
</div>

  <div class='navbar-collapse collapse' >
  <footer class='footer' id='footer'>
      
            <div class='pull-left' style='margin-left:5px;'>
            <h6>Developed by Paraschidis Panagiotis</h6>
            <h6>for his undergraduate thesis</h6>
            <h6>2016-2017</h6>    
         </div>  
        
          <div class='pull-right'>
              <img src='images/uoc.jpg' alt='Uoc Logo'>
          </div>
          <div class='pull-right' style='margin-right:5px;'>
              <h6>Computer Science Department</h6> 
              <h6>University Of Crete</h6>
          </div> 
  </footer>
   </div>
	 
    
    </body>
</html>
";
     
mysqli_close($conn); 

