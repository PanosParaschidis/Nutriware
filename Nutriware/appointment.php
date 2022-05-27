<?php
 session_start();
if(!isset($_SESSION['status'])){
          header("Location: login.html"); 
     }
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
          
            
          
             <div class="navbar-collapse collapse" >
                  <ul class="nav nav-pills navbar-right" id="topmenu">
                <li><a href="profile.php">Προφίλ</a></li>
                <li><a href="comm.php">Επικοινωνία</a></li>
                <li><a href="faq.php">Συχνές Ερωτήσεις</a></li>
                <li><a href="signout.php">Αποσύνδεση</a></li>
            </ul>      
          </div>
            
            
             <ul class="nav nav-pills navbar-right" id="choicemenu">
                 <li><a href="#" class='menuButton' onclick="openNav()">Μενού</a> </li>
             </ul>
          
        </div>
      </nav>
     </div>
        <div id="bread" class="pull-left">
            <ol class="breadcrumb">
            <li><a href="profile.php">Αρχική</a></li>
            <li><a href="profile.php">Σύνδεση</a></li>
            <li class="active">Νέο Ραντεβού</li>        
          </ol>
        </div>
        
  
       
       <div class="btn-group" id="b1">
             <br><br>
        <button  class="btn btn-default" onclick="window.location.href='appointment1.html'">Νέος Πελάτης</button>
      
        <button  class="btn btn-default" onclick="window.location.href='appointment2.php'">Υπάρχων Πελάτης</button>
        </div>
    
    
    
    
   
        
<!--hidden sidebar -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="clients.php">Οι πελάτες μου</a>
                <a href="newclient.html">Νέος Πελάτης</a>  <hr>
                <a href="newdiet.php">Σχεδιασμός Διαιτολογίου</a>
                <a href="equals.html">Υπολογισμός Ισοδυνάμων</a>
                 <a href="tables.php">Πίνακες Σύστασης Τροφίμων</a>  <hr>
                  <a href="appointment.php">Νέο Ραντεβού</a>
                  <a href="calendar.php">Ημερολόγιο</a>
              </div>
 
       
            <div id="mySidenav1" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="profile.php">Προφίλ</a> <hr>
  <a href="clients.php">Οι πελάτες μου</a>
  <a href="newclient.html">Νέος Πελάτης</a>  <hr>
  <a href="newdiet.php">Σχεδιασμός Διαιτολογίου</a>
  <a href="equals.html">Υπολογισμός Ισοδυνάμων</a>
   <a href="tables.php">Πίνακες Σύστασης Τροφίμων</a> <hr>
    <a href="appointment.php">Νέο Ραντεβού</a>
    <a href="calendar.php">Ημερολόγιο</a> <hr>
      <a href="comm.php">Επικοινωνία</a>
      <a href="faq.php">Συχνές Ερωτήσεις</a>
      <a href="signout.php">Αποσύνδεση</a>
    
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

