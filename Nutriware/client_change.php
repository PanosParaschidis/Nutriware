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
      
    

 $uname=filter_input(INPUT_POST, 'uname');
  $pwd=filter_input(INPUT_POST, 'pwd');
  $fname=filter_input(INPUT_POST, 'fname');
    $lname=filter_input(INPUT_POST, 'lname');
    $email=filter_input(INPUT_POST, 'email');
    $tel=filter_input(INPUT_POST, 'tel');
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
              
                <li><a href='client_diets.php'>??????????????????????</a></li>
                <li><a href='client_profile.php'>????????????</a></li>
                <li><a href='comm.php'>??????????????????????</a></li>
                <li><a href='faq.php''>???????????? ??????????????????</a></li>
                <li><a href='signout.php'>????????????????????</a></li>
            </ul>      
          </div>

      <ul class='nav nav-pills navbar-left' id='choicemenu1'>
                 <li><a href='#' class='menuButton' onclick='openNav()'>??????????</a> </li>
             </ul>          

        </div>
      </nav>
     </div>
        <div id='bread' class='pull-left'>
            <ol class='breadcrumb'>
            <li><a href='client_profile.php'>????????????</a></li>
            <li><a href='client_profile.php'>??????????????</a></li>
            <li><a href='client_profile.php'>????????????</a></li>
            <li class='active'>???????????? ??????????????????</li>        
          </ol>
        </div>
        <!---main content--->
        
        <div class='container-fluid' id='cont2'>
       <br><br>
                
             <h2> ???????????????? ?????????????????????? </h2>";
        echo "
      
            <form class='form-horizontal' method='post' action='client_save.php'>
                 
                 <div class='form-group'>
                  <label class='control-label col-sm-2' for='fname'>??????????:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='fname' name='fname' value='".$fname."' >
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-2' for='lname'>??????????????:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='lname' name='lname' value='".$lname."' >
                  </div>
                </div>
                <div class='form-group'>
                  <label class='control-label col-sm-2' for='uname'>Username:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='uname' name='uname' value='".$uname."' >
                  </div>
                </div>
                <div class='form-group'>
                  <label class='control-label col-sm-2' for='pwd'>Password:</label>
                  <div class='col-sm-4'>
                    <input type='password' class='form-control' id='pwd' name='pwd' value='".$pwd."' >
                  </div>
                </div>
                   <div class='form-group'>
                  <label class='control-label col-sm-2' for='pwd1'>?????????????????????? Password:</label>
                  <div class='col-sm-4'>
                    <input type='password' class='form-control' id='pwd1' name='pwd1' value='".$pwd."' >
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='email'>E-mail:</label>
                  <div class='col-sm-4'>
                    <input type='email' class='form-control' id='email' name='email' value='".$email."' >
                  </div>
                </div>
                      <div class='form-group'>
                  <label class='control-label col-sm-2' for='tel'>????????????????:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='tel' name='tel' value='".$tel."' >
                  </div>
                </div>
                   <div class='form-group'>
                  <div class='col-sm-offset-2 col-sm-2'>
                      <button type='submit' class='btn btn-default'>????????????????????</button>
                  </div>
                </div>
                </form>
           
        </div>
        
   <!---end main--->
                 <div id='mySidenav' class='sidenav'>
                <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
          
              </div>
 
       
            <div id='mySidenav1' class='sidenav'>
  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
  <a href='client_profile.php'>????????????</a>
  <a href='client_diets.php'>??????????????????????</a>
      <a href='comm.php'>??????????????????????</a>
      <a href='faq.php'>???????????? ??????????????????</a>
      <a href='signout.php'>????????????????????</a>
    
</div>

  <!-- footer-->
        <div class='navbar-collapse collapse' >
  <footer class='footer' id='footer' >
      
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
    </html>";
mysqli_close($conn); 