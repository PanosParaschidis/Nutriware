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
        
        $client=$_SESSION['client'];
          $sql1="SELECT * FROM `client` WHERE `Username` = '$client'";
    $res1=mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_assoc($res1);
    $cid=$row1['Cid'];
    
    $sql2="SELECT * FROM `frequency` WHERE `cid` = '$cid'";
     $res2=mysqli_query($conn, $sql2);
    $row2= mysqli_fetch_assoc($res2);
     if(mysqli_num_rows($res2)==0){
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
         
                <li ><a href='profile.php'>Προφίλ</a></li>
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
            <li class='active'>Διατροφικές Προτιμήσεις</li>        
          </ol>
        </div>
        
 <!-- -main content- -->
<div class='container'>
    <br><br>
    <h2>Δεν βρέθηκαν διατροφικές προτιμήσεις του πελάτη ". $row1['Fname']. " ". $row1['Lname']." </h2>
</div>
    
       
   <!-- -end main- -->
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
    
 
</html>  ";
     }
    
    else{
        
    
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
         
                <li ><a href='profile.php'>Προφίλ</a></li>
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
            <li class='active'>Διατροφικές Προτιμήσεις</li>        
          </ol>
        </div>
        <!-- -main content- -->
<div class='container'>
    <br><br>
  <div id='table1' > 
  
         <h3>Συχνότητα Κατανάλωσης τροφίμων </h3>
         <br>
            
            <table class='table'>
         <tr>
            <th> Είδος Τροφίμου </th>
            <td> Ποσότητα </td>
            <td> Συχνότητα </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
         </tr> 
     
         <tr>
            <th> Κρέας Χοιρινό (κεφτέδες) </th>
            <td> 140g </td>
            <td> ";
            if( $row2['ena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         
         </tr> 
           <tr>
            <th> Κρέας Μοσχάρι/Κιμάς  </th>
            <td> 140g </td>
   <td> ";
            if( $row2['duo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['duo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['duo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['duo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['duo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['duo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr> 
           <tr>
            <th> Κρέας Αρνί/Κατσίκι </th>
            <td> 140g </td>
            <td> ";
            if( $row2['tria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['tria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['tria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['tria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['tria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['tria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr> 
         <tr>
            <th> Κοτόπουλο </th>
            <td> 140g </td>
            <td> ";
            if( $row2['tessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['tessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['tessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['tessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['tessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['tessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr> 
         <tr>
            <th> Κουνέλι </th>
            <td> 140g </td>
           <td> ";
            if( $row2['pente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['pente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['pente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['pente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['pente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['pente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr> 
         <tr>
            <th> Γαλοπούλα </th>
            <td> 140g </td>
            <td> ";
            if( $row2['eksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr> 
         <tr>
            <th> Κυνήγι(λαγός,αγριογούρουνο κλπ) </th>
            <td> 140g </td>
         <td> ";
            if( $row2['efta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['efta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['efta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['efta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['efta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['efta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
       <tr>
            <th> Κονσέρβα (Χορινό) </th>
            <td> 140g </td>
  <td> ";
            if( $row2['oxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['oxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['oxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['oxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['oxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['oxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Αλλαντικά Χοιρινά (ζαμπόν, μπέικον,σαλάμι κλπ) </th>
            <td> 30g </td>
      <td> ";
            if( $row2['ennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Αλλαντικά Γαλοπούλας </th>
            <td> 30g </td>
     <td> ";
            if( $row2['deka']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['deka']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['deka']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['deka']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['deka']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['deka']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ψάρι Φρέσκο(αθερίνα, γαύρος κλπ) </th>
            <td> 140g </td>
          <td> ";
            if( $row2['enteka']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['enteka']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['enteka']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['enteka']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['enteka']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['enteka']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ψάρι παστό/κονσέρβα (μπακαλιάρος κλπ) </th>
            <td> 140g </td>
         <td> ";
            if( $row2['dodeka']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['dodeka']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['dodeka']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['dodeka']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['dodeka']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['dodeka']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Θαλασσινά (καλαμάρι, χταπόδι, μπιφτέκια θαλασσινών κλπ)  </th>
            <td> 140g </td>
 <td> ";
            if( $row2['dekatria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['dekatria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['dekatria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['dekatria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['dekatria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['dekatria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Οστρακοειδή </th>
            <td> 140g </td>
<td> ";
            if( $row2['dekatessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['dekatessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['dekatessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['dekatessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['dekatessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['dekatessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Εντόσθια (συκώτι χοιρινό, κοτόπουλο, μοσχάρι) </th>
            <td> 140g </td>
<td> ";
            if( $row2['dekapente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['dekapente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['dekapente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['dekapente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['dekapente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['dekapente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Σαλιγγάρια </th>
            <td> 10τμ </td>
        <td> ";
            if( $row2['dekaeksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['dekaeksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['dekaeksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['dekaeksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['dekaeksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['dekaeksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Αυγά (βραστά, τηγανιτά, ομελέτα, για παρασκευή εδεσμάτων) </th>
            <td> 1τμ </td>
<td> ";
            if( $row2['dekaefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['dekaefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['dekaefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['dekaefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['dekaefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['dekaefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ζωμός Κρέατος (κατα το μαγείρεμα) </th>
            <td> 1/3 φλ. </td>
<td> ";
            if( $row2['dekaoxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['dekaoxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['dekaoxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['dekaoxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['dekaoxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['dekaoxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Όσπρια (φασόλια, φακές, φάβα, ρεβύθια, κουκιά, αρακάς) </th>
            <td> 1 φλ. </td>
<td> ";
            if( $row2['dekaennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['dekaennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['dekaennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['dekaennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['dekaennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['dekaennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Σόγια (φασόλια σόγιας/φύτρες σόγιας)  </th>
            <td> 1 φλ. </td>
<td> ";
            if( $row2['eikosi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eikosi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eikosi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eikosi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eikosi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eikosi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Τυρί Πλήρους Λιπαρών(φέτα, κασέρι, κεφαλοτύρι) </th>
            <td> 30g </td>
        <td> ";
            if( $row2['eikosiena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eikosiena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eikosiena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eikosiena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eikosiena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eikosiena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Τυρί Υψηλό σε Αλάτι (γραβιέρα, παρμεζάνα) </th>
            <td> 30g </td>
  <td> ";
            if( $row2['eikosiduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eikosiduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eikosiduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eikosiduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eikosiduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eikosiduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Τυρί 12% Λιπαρά (μυζήθρα, ανθότυρο) </th>
            <td> 30g </td>
  <td> ";
            if( $row2['eikositria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eikositria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eikositria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eikositria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eikositria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eikositria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Cottage Cheese (flair) </th>
            <td> 60g </td>
<td> ";
            if( $row2['eikositessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eikositessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eikositessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eikositessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eikositessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eikositessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Τυρί απο Σόγια (νηστήσιμο) </th>
            <td> 30g </td>
<td> ";
            if( $row2['eikosipente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eikosipente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eikosipente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eikosipente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eikosipente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eikosipente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Γάλα Πρόβειο/Κατσικίσιο Πλήρες </th>
            <td> 1 φλ. </td>
<td> ";
            if( $row2['eikosieksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eikosieksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eikosieksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eikosieksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eikosieksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eikosieksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Γάλα Ζαχαρούχο </th>
            <td> 1 φλ. </td>
     <td> ";
            if( $row2['eikosiefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eikosiefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eikosiefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eikosiefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eikosiefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eikosiefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Φρέσκο Γάλα Αγελαδινό Πλήρες(3,5%) </th>
              <td> 1 φλ. </td>
   <td> ";
            if( $row2['eikosioxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eikosioxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eikosioxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eikosioxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eikosioxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eikosioxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Φρέσκο Γάλα Αποβουτυρωμένο(1,5%) </th>
            <td> 1 φλ. </td>
         <td> ";
            if( $row2['eikosiennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eikosiennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eikosiennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eikosiennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eikosiennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eikosiennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Φρέσκο Γάλα Άπαχο(0%) </th>
            <td> 1 φλ. </td>
     <td> ";
            if( $row2['trianta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['trianta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['trianta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['trianta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['trianta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['trianta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Σοκολατούχο Γάλα Πλήρες </th>
            <td> 1 φλ. </td>
       <td> ";
            if( $row2['triantaena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['triantaena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['triantaena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['triantaena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['triantaena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['triantaena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Γάλα/Ρόφημα Σόγιας </th>
            <td> 1 φλ. </td>
<td> ";
            if( $row2['triantaduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['triantaduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['triantaduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['triantaduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['triantaduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['triantaduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Γάλα Κακάκο (0% ζάχαρη 0% λιπαρά) </th>
            <td> 1 φλ. </td>
 <td> ";
            if( $row2['triantatria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['triantatria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['triantatria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['triantatria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['triantatria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['triantatria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Γιαούρτι Πρόβειο </th>
            <td> 1 φλ. </td>
      <td> ";
            if( $row2['triantatessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['triantatessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['triantatessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['triantatessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['triantatessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['triantatessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Γιαούρτι Αγελαδινό Στραγγιστό Πλήρες (10%) </th>
            <td> 1 φλ. </td>
 <td> ";
            if( $row2['triantapente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['triantapente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['triantapente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['triantapente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['triantapente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['triantapente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Γιαούρτι Αγελαδινό με Λίγα Λιπαρά (2%) </th>
            <td> 1 φλ. </td>
<td> ";
            if( $row2['triantaeksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['triantaeksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['triantaeksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['triantaeksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['triantaeksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['triantaeksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Γιαούρτι Αγελαδινό με 0% </th>
            <td> 1 φλ. </td>
    <td> ";
            if( $row2['triantaefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['triantaefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['triantaefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['triantaefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['triantaefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['triantaefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Επιδόρπιο Γιαουρτιού </th>
            <td> 1 φλ. </td>
         <td> ";
            if( $row2['triantaoxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['triantaoxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['triantaoxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['triantaoxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['triantaoxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['triantaoxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Κρέμα Γάλακτος </th>
            <td> 1/2 φλ. </td>
 <td> ";
            if( $row2['triantaennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['triantaennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['triantaennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['triantaennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['triantaennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['triantaennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Κρέμα Γάλακτος Light </th>
            <td> 1/2 φλ. </td>
<td> ";
            if( $row2['saranta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['saranta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['saranta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['saranta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['saranta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['saranta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
            <tr>
            <th> Κρέμα Ζαχαροπλαστικής </th>
            <td> 1/2 φλ. </td>
 <td> ";
            if( $row2['sarantaena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['sarantaena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['sarantaena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['sarantaena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['sarantaena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['sarantaena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
               <tr>
            <th> Σαντιγί </th>
            <td> 1/2 φλ. </td>
<td> ";
            if( $row2['sarantaduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['sarantaduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['sarantaduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['sarantaduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['sarantaduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['sarantaduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ζελέ </th>
            <td> 1 φλ. </td>
     <td> ";
            if( $row2['sarantatria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['sarantatria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['sarantatria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['sarantatria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['sarantatria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['sarantatria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ζελέ Light </th>
            <td> 1 φλ. </td>
<td> ";
            if( $row2['sarantatessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['sarantatessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['sarantatessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['sarantatessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['sarantatessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['sarantatessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ψωμί Λευκό </th>
            <td> 1 φέτα </td>
 <td> ";
            if( $row2['sarantapente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['sarantapente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['sarantapente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['sarantapente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['sarantapente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['sarantapente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ψωμί Ολικής Αλέσεως/Σικάλεως </th>
            <td> 1 φέτα </td>
   <td> ";
            if( $row2['sarantaeksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['sarantaeksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['sarantaeksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['sarantaeksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['sarantaeksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['sarantaeksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ντάκο </th>
            <td> 60g </td>
   <td> ";
            if( $row2['sarantaefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['sarantaefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['sarantaefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['sarantaefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['sarantaefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['sarantaefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Παξιμάδι Κρίθινο </th>
            <td> 60g </td>
<td> ";
            if( $row2['sarantaoxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['sarantaoxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['sarantaoxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['sarantaoxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['sarantaoxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['sarantaoxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Παξιμάδι Σταρένιο </th>
            <td> 60g </td>
           <td> ";
            if( $row2['sarantaennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['sarantaennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['sarantaennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['sarantaennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['sarantaennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['sarantaennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Φρυγανιές Σικάλεως/Ολικής </th>
            <td> 1 τμ </td>
       <td> ";
            if( $row2['peninta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['peninta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['peninta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['peninta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['peninta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['peninta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Φρυγανιές Σταρένιες </th>
            <td> 1 τμ </td>
     <td> ";
            if( $row2['penintaena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['penintaena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['penintaena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['penintaena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['penintaena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['penintaena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Κριτσίνια Σίτου </th>
            <td> 1 τμ </td>
       <td> ";
            if( $row2['penintaduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['penintaduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['penintaduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['penintaduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['penintaduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['penintaduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Κριτσίνια Πολύσπορα </th>
            <td> 1 τμ </td>
         <td> ";
            if( $row2['penintatria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['penintatria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['penintatria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['penintatria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['penintatria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['penintatria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Κουλούρι Με Σουσάμι/Σταφιδόψωμο </th>
            <td> 1 τμ </td>
        <td> ";
            if( $row2['penintatessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['penintatessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['penintatessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['penintatessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['penintatessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['penintatessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Κουλούρι Γεμιστό </th>
            <td> 1 τμ </td>
<td> ";
            if( $row2['penintapente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['penintapente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['penintapente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['penintapente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['penintapente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['penintapente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Πιροσκί </th>
            <td> 1 τμ </td>
<td> ";
            if( $row2['penintaeksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['penintaeksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['penintaeksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['penintaeksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['penintaeksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['penintaeksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Πίτα Κυπριακή </th>
            <td> 1 τμ </td>
 <td> ";
            if( $row2['penintaefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['penintaefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['penintaefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['penintaefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['penintaefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['penintaefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Πίτα για Σουβλάκια </th>
            <td> 1 τμ </td>
         <td> ";
            if( $row2['penintaoxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['penintaoxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['penintaoxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['penintaoxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['penintaoxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['penintaoxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ζάχαρη </th>
            <td> 1 κ.γ. </td>
           <td> ";
            if( $row2['penintaennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['penintaennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['penintaennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['penintaennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['penintaennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['penintaennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μέλι </th>
            <td> 1 κ.γ. </td>
  <td> ";
            if( $row2['eksinta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksinta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksinta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksinta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksinta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksinta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μαρμελάδα </th>
            <td> 1 κ.γ. </td>
  <td> ";
            if( $row2['eksintaena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksintaena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksintaena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksintaena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksintaena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksintaena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ζυμαρικά Σικάλεως(λευκά σπαγγέτι, κριθαράκι κλπ) </th>
            <td> 240g </td>
<td> ";
            if( $row2['eksintaduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksintaduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksintaduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksintaduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksintaduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksintaduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ζυμαρικά Ολικής </th>
            <td> 240g </td>
      <td> ";
            if( $row2['eksintatria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksintatria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksintatria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksintatria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksintatria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksintatria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Καλαμπόκι </th>
            <td> 50g </td>
        <td> ";
            if( $row2['eksintatessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksintatessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksintatessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksintatessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksintatessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksintatessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Παστίτσιο/Μουσακά </th>
            <td> 250g </td>
   <td> ";
            if( $row2['eksintapente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksintapente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksintapente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksintapente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksintapente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksintapente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Πίτες </th>
            <td> 120g </td>
       <td> ";
            if( $row2['eksintaeksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksintaeksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksintaeksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksintaeksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksintaeksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksintaeksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Πατάτες Βραστές/Πουρές χωρίς Γάλα </th>
            <td> 1 τμ </td>
          <td> ";
            if( $row2['eksintaefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksintaefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksintaefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksintaefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksintaefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksintaefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Πατάτες Τηγανητές </th>
            <td> 1 τμ </td>
  <td> ";
            if( $row2['eksintaoxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksintaoxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksintaoxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksintaoxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksintaoxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksintaoxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Πατάτες Ψητές/Φούρνου </th>
            <td> 1 τμ </td>
         <td> ";
            if( $row2['eksintaennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eksintaennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eksintaennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eksintaennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eksintaennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eksintaennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ταραμάς </th>
            <td> 1 κ.σ. </td>
<td> ";
            if( $row2['evdominta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['evdominta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['evdominta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['evdominta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['evdominta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['evdominta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ρύζι Βραστό (Λευκό) </th>
            <td> 1 φλ </td>
            <td> ";
            if( $row2['evdomintaena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['evdomintaena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['evdomintaena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['evdomintaena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['evdomintaena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['evdomintaena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ρύζι Ανάμικτο/Καστανό </th>
            <td> 1 φλ </td>
          <td> ";
            if( $row2['evdomintaduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['evdomintaduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['evdomintaduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['evdomintaduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['evdomintaduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['evdomintaduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Τραχανάς </th>
            <td> 1 φλ </td>
      <td> ";
            if( $row2['evdomintatria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['evdomintatria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['evdomintatria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['evdomintatria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['evdomintatria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['evdomintatria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ντολμαδάκια με Κιμά/Λαχανοντολμάδες/Γεμιστά </th>
            <td> 4 τμ </td>
       <td> ";
            if( $row2['evdomintatessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['evdomintatessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['evdomintatessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['evdomintatessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['evdomintatessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['evdomintatessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ντολμαδάκια χωρίς Κιμά/Γεμιστά/Σπανακόρυζο κ.α. </th>
            <td> 4 τμ </td>
        <td> ";
            if( $row2['evdomintapente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['evdomintapente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['evdomintapente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['evdomintapente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['evdomintapente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['evdomintapente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Πίτσα </th>
            <td> 1 κομ </td>
   <td> ";
            if( $row2['evdomintaeksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['evdomintaeksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['evdomintaeksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['evdomintaeksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['evdomintaeksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['evdomintaeksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ξηροί Καρποί </th>
            <td> 5-6 τμ </td>
      <td> ";
            if( $row2['evdomintaefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['evdomintaefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['evdomintaefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['evdomintaefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['evdomintaefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['evdomintaefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Φρέσκα Λαχανικά Εποχής </th>
            <td> 1 φλ </td>
    <td> ";
            if( $row2['evdomintaoxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['evdomintaoxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['evdomintaoxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['evdomintaoxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['evdomintaoxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['evdomintaoxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Βρασμένα Λαχανικά Εποχής </th>
            <td> 1/2 φλ </td>
      <td> ";
            if( $row2['evdomintaennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['evdomintaennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['evdomintaennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['evdomintaennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['evdomintaennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['evdomintaennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μαγειρεμένα Λαχανικά (κυρίως γεύμα πχ. Φασολάκια, Ιμαμ κλπ) </th>
            <td> 1 φλ </td>
      <td> ";
            if( $row2['ogdonta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ogdonta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ogdonta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ogdonta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ogdonta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ogdonta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Τουρσί </th>
            <td> 1/2 φλ </td>
      <td> ";
            if( $row2['ogdontaena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ogdontaena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ogdontaena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ogdontaena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ogdontaena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ogdontaena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Φρούτα Φρέσκα Εποχής </th>
            <td> 1 τμ </td>
            <td> ";
            if( $row2['ogdontaduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ogdontaduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ogdontaduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ogdontaduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ogdontaduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ogdontaduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Κομπόστες </th>
            <td> 1/2 φλ </td>
         <td> ";
            if( $row2['ogdontatria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ogdontatria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ogdontatria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ogdontatria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ogdontatria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ogdontatria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Αποξηραμένα Φρούτα </th>
            <td> 1 τμ </td>
         <td> ";
            if( $row2['ogdontatessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ogdontatessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ogdontatessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ogdontatessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ogdontatessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ogdontatessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Χυμοί Φρούτων (φυσικοί) </th>
            <td> 1 φλ </td>
    <td> ";
            if( $row2['ogdontapente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ogdontapente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ogdontapente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ogdontapente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ogdontapente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ogdontapente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Χυμοί Εμπορίου </th>
            <td> 1 φλ </td>
 <td> ";
            if( $row2['ogdontaeksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ogdontaeksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ogdontaeksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ogdontaeksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ogdontaeksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ogdontaeksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Λεμονάδες/Πορτοκαλάδες με ζάχαρη </th>
            <td> 1 φλ </td>
         <td> ";
            if( $row2['ogdontaefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ogdontaefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ogdontaefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ogdontaefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ogdontaefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ogdontaefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Άλλα Αναψυκτικά </th>
            <td> 1 φλ </td>
    <td> ";
            if( $row2['ogdontaoxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ogdontaoxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ogdontaoxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ogdontaoxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ogdontaoxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ogdontaoxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Αναψυκτικά τύπου Cola </th>
            <td> 1 φλ </td>
        <td> ";
            if( $row2['ogdontaennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ogdontaennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ogdontaennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ogdontaennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ogdontaennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ogdontaennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Αναψυτκικά τύπου Cola Light </th>
            <td> 1 φλ </td>
<td> ";
            if( $row2['eneninta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['eneninta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['eneninta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['eneninta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['eneninta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['eneninta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Άλλα Αναψυκτικά Light</th>
            <td> 1 φλ </td>
    <td> ";
            if( $row2['enenintaena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['enenintaena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['enenintaena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['enenintaena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['enenintaena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['enenintaena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ενεργειακά Ποτά (Redbull κλπ) </th>
            <td> 1 φλ </td>
     <td> ";
            if( $row2['enenintaduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['enenintaduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['enenintaduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['enenintaduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['enenintaduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['enenintaduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ισοτονικά Ποτά </th>
            <td> 1 φλ </td>
    <td> ";
            if( $row2['enenintatria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['enenintatria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['enenintatria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['enenintatria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['enenintatria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['enenintatria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Βούτυρο (Ζωικό) </th>
            <td> 1 κ.γ. </td>
  <td> ";
            if( $row2['enenintatessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['enenintatessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['enenintatessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['enenintatessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['enenintatessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['enenintatessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μαργαρίνη (Φυτική) </th>
            <td> 1 κ.γ. </td>
         <td> ";
            if( $row2['enenintapente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['enenintapente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['enenintapente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['enenintapente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['enenintapente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['enenintapente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μαργαρίνη τύπου Becel </th>
            <td> 1 κ.γ. </td>
         <td> ";
            if( $row2['enenintaeksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['enenintaeksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['enenintaeksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['enenintaeksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['enenintaeksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['enenintaeksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ελαιόλαδο </th>
            <td> 1 κ.σ. </td>
             <td> ";
            if( $row2['enenintaefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['enenintaefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['enenintaefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['enenintaefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['enenintaefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['enenintaefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Σπορέλαια </th>
            <td> 1 κ.σ. </td>
          <td> ";
            if( $row2['enenintaoxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['enenintaoxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['enenintaoxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['enenintaoxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['enenintaoxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['enenintaoxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ελιές </th>
            <td> 1 τμ </td>
          <td> ";
            if( $row2['enenintaennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['enenintaennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['enenintaennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['enenintaennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['enenintaennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['enenintaennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μαγιονέζα </th>
              <td> 1 κ.σ. </td>
  <td> ";
            if( $row2['ekato']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekato']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekato']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekato']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekato']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekato']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μαγιονέζα Light </th>
            <td> 1 κ.σ. </td>
        <td> ";
            if( $row2['ekatonena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatonena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatonena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatonena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatonena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatonena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Λουκουμάδες </th>
            <td> 1 τμ </td>
       <td> ";
            if( $row2['ekatonduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatonduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatonduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatonduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatonduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatonduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Γλυκά Κουταλιού </th>
            <td> 1 κ.σ. </td>
             <td> ";
            if( $row2['ekatontria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatontria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatontria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatontria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatontria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatontria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Πάστες/Σοκολατίνες/Γλυκά Σοκολάτας </th>
            <td> 1 τμ </td>
            <td> ";
            if( $row2['ekatontessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatontessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatontessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatontessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatontessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatontessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>         </tr>
         <tr>
            <th> Μπισκότα/Κεικ/Κουλουράκια Βουτύρου απλά/Κρουασάν </th>
            <td>  </td>
           <td> ";
            if( $row2['ekatonpente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatonpente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatonpente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatonpente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatonpente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatonpente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μπισκότα/Κεικ με Σοκολάτα (γέμιση)</th>
            <td>  </td>
   <td> ";
            if( $row2['ekatoneksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Καραμέλες με Ζάχαρη/Λουκούμια </th>
            <td> 1 τμ </td>
         <td> ";
            if( $row2['ekatonefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatonefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatonefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatonefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatonefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatonefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Παστέλι απλό με Σουσάμι </th>
            <td> 40g </td>
      <td> ";
            if( $row2['ekatonoxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatonoxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatonoxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatonoxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatonoxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatonoxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Παστέλι με Ξηρούς Καρπούς </th>
            <td> 40g </td>
     <td> ";
            if( $row2['ekatonennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatonennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatonennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatonennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatonennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatonennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Χαλβάς με Ταχίνι </th>
            <td> 40g </td>
  <td> ";
            if( $row2['ekatondeka']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatondeka']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatondeka']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatondeka']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatondeka']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatondeka']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Χαλβάς Σιμιγδαλένιος </th>
            <td> 40g </td>
      <td> ";
            if( $row2['ekatonenteka']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatonenteka']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatonenteka']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatonenteka']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatonenteka']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatonenteka']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Καφές (Ελληνικός, γαλλικός, espresso, νες) </th>
            <td> 1 φλ </td>
<td> ";
            if( $row2['ekatondodeka']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatondodeka']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatondodeka']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatondodeka']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatondodeka']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatondodeka']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ντεκαφεϊνέ </th>
            <td> 1 φλ </td>
<td> ";
            if( $row2['ekatondekatria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatondekatria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatondekatria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatondekatria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatondekatria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatondekatria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Κακάο </th>
            <td> 1 φλ </td>
           <td> ";
            if( $row2['ekatondekatessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatondekatessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatondekatessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatondekatessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatondekatessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatondekatessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Σοκολάτα Ρόφημα </th>
            <td> 1 φλ </td>
         <td> ";
            if( $row2['ekatondekapente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatondekapente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatondekapente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatondekapente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatondekapente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatondekapente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Τσάι Μαύρο </th>
            <td> 1 φλ </td>
          <td> ";
            if( $row2['ekatondekaeksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatondekaeksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatondekaeksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatondekaeksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatondekaeksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatondekaeksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Τσάι Πράσινο </th>
            <td> 1 φλ </td>
           <td> ";
            if( $row2['ekatondekaefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatondekaefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatondekaefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatondekaefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatondekaefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatondekaefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Αφεψήματα </th>
            <td> 1 φλ </td>
      <td> ";
            if( $row2['ekatondekaoxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatondekaoxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatondekaoxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatondekaoxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatondekaoxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatondekaoxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Κρασί </th>
            <td> 90ml </td>
      <td> ";
            if( $row2['ekatondekaennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatondekaennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatondekaennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatondekaennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatondekaennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatondekaennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μπύρα </th>
            <td> 330ml </td>
          <td> ";
            if( $row2['ekatoneikosi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneikosi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneikosi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneikosi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneikosi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneikosi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μπύρα χωρίς Αλκοόλ </th>
            <td> 330ml </td>
          <td> ";
            if( $row2['ekatoneikosiena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneikosiena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneikosiena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneikosiena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneikosiena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneikosiena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ρακί/Ούζο/Τσίπουρο </th>
            <td> 40ml </td>
<td> ";
            if( $row2['ekatoneikosiduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneikosiduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneikosiduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneikosiduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneikosiduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneikosiduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Οινοπνευματώδη 40ο (Ουίσκι/μπράντυ,τζιν,λευκή τεκίλα,βότκα) </th>
            <td> 40ml </td>
  <td> ";
            if( $row2['ekatoneikositria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneikositria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneikositria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneikositria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneikositria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneikositria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Corn Flakes </th>
            <td> 1/2 φλ </td>
       <td> ";
            if( $row2['ekatoneikositessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneikositessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneikositessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneikositessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneikositessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneikositessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Δημητριακά Πρωινού τύπου Fitness(σκέτα ή με γεύσεις) </th>
            <td> 1/2 φλ </td>
      <td> ";
            if( $row2['ekatoneikosipente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneikosipente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneikosipente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneikosipente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneikosipente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneikosipente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Δημητριακά Ρυζιού (π.χ. Coco Pops) </th>
            <td> 1/2 φλ </td>
           <td> ";
            if( $row2['ekatoneikosieksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneikosieksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneikosieksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneikosieksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneikosieksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneikosieksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Δημητριακά με Σοκολάτα </th>
            <td> 1/2 φλ </td>
           <td> ";
            if( $row2['ekatoneikosiefta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneikosiefta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneikosiefta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneikosiefta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneikosiefta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneikosiefta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μούσλι Δημητριακών </th>
            <td> 1/2 φλ </td>
          <td> ";
            if( $row2['ekatoneikosioxto']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneikosioxto']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneikosioxto']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneikosioxto']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneikosioxto']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneikosioxto']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Ταχίνι </th>
            <td> 1 κ.σ. </td>
<td> ";
            if( $row2['ekatoneikosiennia']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatoneikosiennia']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatoneikosiennia']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatoneikosiennia']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatoneikosiennia']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatoneikosiennia']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Φυστικοβούτυρο </th>
            <td> 1 κ.σ. </td>
    <td> ";
            if( $row2['ekatontrianta']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatontrianta']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatontrianta']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatontrianta']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatontrianta']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatontrianta']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Παγωτά 0%-Γρανίτες </th>
            <td> 80g </td>
<td> ";
            if( $row2['ekatontriantaena']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatontriantaena']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatontriantaena']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatontriantaena']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatontriantaena']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatontriantaena']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Πατατάκια/Γαριδάκια </th>
            <td> 40g </td>
<td> ";
            if( $row2['ekatontriantaduo']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatontriantaduo']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatontriantaduo']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatontriantaduo']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatontriantaduo']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatontriantaduo']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Σαλάτες Αλοιφή (μελιτζανοσαλάτα, τζατζίκι κλπ) </th>
            <td> 1 κ.σ. </td>
            <td> ";
            if( $row2['ekatontriantatria']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatontriantatria']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatontriantatria']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatontriantatria']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatontriantatria']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatontriantatria']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Κέτσαπ </th>
            <td> 1 κ.σ. </td>
           <td> ";
            if( $row2['ekatontriantatessera']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatontriantatessera']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatontriantatessera']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatontriantatessera']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatontriantatessera']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatontriantatessera']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Μουστάρδα </th>
            <td> 1 κ.σ. </td>
         <td> ";
            if( $row2['ekatontriantapente']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatontriantapente']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatontriantapente']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatontriantapente']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatontriantapente']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatontriantapente']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         <tr>
            <th> Νερό </th>
            <td> 1 ποτ. </td>
         <td> ";
            if( $row2['ekatontriantaeksi']=='zero' ){
                echo "Ποτέ/Σπάνια";
            }else if($row2['ekatontriantaeksi']=='one'){
                echo "1-3φ/μήνα";
            }else if($row2['ekatontriantaeksi']=='two'){
                echo "1-2φ/εβδομ.";
            }else if($row2['ekatontriantaeksi']=='three'){
                echo "3-6φ/εβδομ.";
            }else if($row2['ekatontriantaeksi']=='four'){
                echo "1φ/ημέρα";
            }else if($row2['ekatontriantaeksi']=='four'){
                echo "≥2φ/ημέρα";
            }
          echo " </td>
         </tr>
         
         
         
      
         
         
         
         
         
            </table>
              
          

  </div>

   
   </div>

    
  
    
   
   
    
       
   <!-- -end main- -->
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
    
 
</html>  ";
    }
    
        mysqli_close($conn); 