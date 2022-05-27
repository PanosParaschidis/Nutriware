<?php
  session_cache_limiter('private, must-revalidate');
session_cache_expire(60);
header('Content-Type: text/html; charset=utf-8');

        session_start();
        
     
     
   ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <div class="container-fluid" id="grad1">
      <nav class="navbar navbar-default" style="background-color:inherit; border:none; ">
        <div class="container-fluid">
          <div class="navbar-header">
              
              <h1 class="pull-left" style="font-family: Berlin Sans Fb; font-size: 50px; color: #F4F4F4 ">Nutriware</h1>
          </div>
            
         
            <a id="toggleb" class="btn btn-default" data-toggle="collapse" data-target=".menu">
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
            </a>
             <div class="menu navbar-collapse collapse" >
                 <ul class="nav nav-pills navbar-right" id="topmenu1">
                <li><a href="index.php">Αρχική</a></li>
                <li><a href="signup.html">Εγγραφή</a></li>
                <li class="active"><a href="login.html">Σύνδεση</a></li>
                <li><a href="comm.php">Επικοινωνία</a></li>
                <li><a href="faq.php">Συχνές Ερωτήσεις</a></li>
            </ul>        
          </div>
         

        </div>
      </nav>
    </div>
        <div id="bread" class="pull-left">
            <ol class="breadcrumb">
            <li><a href="index.php">Αρχική</a></li>
            <li class="active">Ξέχασα τον κωδικό μου</li>     
          </ol>
        </div>
         <div class="container-fluid" id="cont2">
             
             <div class="container pull-left"  >
                 <br><br>
                 <h3>Εισάγετε το Username σας και θα σας αποσταλέι e-mail σύντομα με τον νέο σας κωδικό</h3>
              <form class="form-horizontal" action="exec_forgot.php" method="post">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="uname">Username:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="uname" name="uname"  placeholder="Enter Username">
                  </div>
                </div>
            
                 
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Αποστολή</button>
                  </div>
                </div>
                
              </form>
             
	  </div>
             
         </div>
        
     <div class="navbar-collapse collapse" >
  <footer class="footer" id="footer">
      
            <div class="pull-left" style="margin-left:5px;">
            <h6>Developed by Paraschidis Panagiotis</h6>
            <h6>for his undergraduate thesis</h6>
            <h6>2016-2017</h6>    
         </div>  
        
          <div class="pull-right">
              <img src="images/uoc.jpg" alt="Uoc Logo">
          </div>
          <div class="pull-right" style="margin-right:5px;">
              <h6>Computer Science Department</h6> 
              <h6>University Of Crete</h6>
          </div> 
  </footer>
   </div>
    </body>
</html>
