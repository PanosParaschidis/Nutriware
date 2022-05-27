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
    
      $client=$_SESSION['client'];
    $sql1="SELECT * FROM `client` WHERE `Username` = '$client'";
    $res1=mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_assoc($res1);
    $cid=$row1['Cid'];
    
    $chol0=filter_input(INPUT_POST, 'chol');
    $chol= str_replace(',', '.', $chol0);
    $hdl0=filter_input(INPUT_POST, 'hdl');
    $hdl=str_replace(',', '.', $hdl0);
    $ldl0=filter_input(INPUT_POST, 'ldl');
    $ldl=str_replace(',', '.', $ldl0);
    $ferum0=filter_input(INPUT_POST, 'ferum');
    $ferum=str_replace(',', '.', $ferum0);
    $glucose0=filter_input(INPUT_POST, 'glucose');
    $glucose=str_replace(',', '.', $glucose0);
    $urine0=filter_input(INPUT_POST, 'urine');
    $urine=str_replace(',', '.', $urine0);
    $creatine0=filter_input(INPUT_POST, 'creatine');
    $creatine=str_replace(',', '.', $creatine0);
    $kalio0=filter_input(INPUT_POST, 'kalio');
    $kalio=str_replace(',', '.', $kalio0);
    $natrio0=filter_input(INPUT_POST, 'natrio');
    $natrio=str_replace(',', '.', $natrio0);
    $ouriko0=filter_input(INPUT_POST, 'ouriko');
    $ouriko=str_replace(',', '.', $ouriko0);
    $trigl0=filter_input(INPUT_POST, 'trigl');
    $trigl=str_replace(',', '.', $trigl0);
    
    
    
    $date=date("Y-m-d");
    $type="biochem";


     $sql2="INSERT INTO `viochimikos_elegxos` (`Xolisteroli_oliki`,`Hdl`,`Ldl`,`Sidiros_orou`,`Glukozi`,`Ouria`,`Kreatinini_orou`,`Kalio`,`Natrio`,`Ouriko_oksi`,`Triglukeridia`,`Cid`,`Date`) VALUES ('$chol','$hdl','$ldl','$ferum','$glucose','$urine','$creatine','$kalio','$natrio','$ouriko','$trigl','$cid','$date')";
    $res2= mysqli_query($conn, $sql2);
    
    $sql3="INSERT INTO `tests` (`Cid`,`Date`,`Type`) VALUES ('$cid','$date','$type') ";
    $res3= mysqli_query($conn, $sql3);
    echo "<html>
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
         
                <li><a href='profile.php'>Προφίλ</a></li>
                <li><a href='comm.php'>Επικοινωνία</a></li>
                <li><a href='faq.php''>Συχνές Ερωτήσεις</a></li>
                <li><a href='signout.php'>Αποσύνδεση</a></li>
            </ul>      
          </div>
            
            
             <ul class='nav nav-pills navbar-right' id='choicemenu'>
                 <li><a href='#' class='menuButton' onclick='openNav()'>Μενού</a> </li>
             </ul>
          
        </div>
      </nav>
     </div>
        <div id='bread' class='pull-left'>
            <ol class='breadcrumb'>
            <li><a href='profile.php'>Αρχική</a></li>
            <li><a href='profile.php'>Σύνδεση</a></li>
            <li><a href='clients.php'>Οι πελάτες μου</a></li>
            <li><a href='clients.php'>Περισσότερα</a></li>
            <li class='active'>Προσθήκη Βιοχημικών Εξετάσεων</li>        
          </ol>
        </div>
        
        <div class='container'>
        <br><br><h2>Οι εξετάσεις αποθηκεύτηκαν με επιτυχία</h2>   
        </div>
  
        
        
        
        
 <!--hidden sidebar -->
            <div id='mySidenav' class='sidenav'>
                <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
                <a href='clients.php'>Οι πελάτες μου</a>
                <a href='newclient.html'>Νέος Πελάτης</a>  <hr>
                <a href='newdiet.php'>Σχεδιασμός Διαιτολογίου</a>
                <a href='equals.html'>Υπολογισμός Ισοδυνάμων</a>
                 <a href='tables.php'>Πίνακες Σύστασης Τροφίμων</a>  <hr>
                  <a href='appointment.php'>Νέο Ραντεβού</a>
                  <a href='calendar.php'>Ημερολόγιο</a>
              </div>
 
       
            <div id='mySidenav1' class='sidenav'>
  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
  <a href='profile.php'>Προφίλ</a> <hr>
  <a href='clients.php'>Οι πελάτες μου</a>
  <a href='newclient.html'>Νέος Πελάτης</a>  <hr>
  <a href='newdiet.php'>Σχεδιασμός Διαιτολογίου</a>
  <a href='equals.html'>Υπολογισμός Ισοδυνάμων</a>
   <a href='tables.php'>Πίνακες Σύστασης Τροφίμων</a>  <hr>
    <a href='appointment.php'>Νέο Ραντεβού</a>
    <a href='calendar.php'>Ημερολόγιο</a> <hr>
      <a href='comm.php'>Επικοινωνία</a>
      <a href='faq.php'>Συχνές Ερωτήσεις</a>
      <a href='signout.php'>Αποσύνδεση</a>
    
</div>

  <!-- footer-->
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