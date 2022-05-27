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
            <li class='active'>Καταγραφή Διατροφικών Προτιμήσεων</li>        
          </ol>
        </div>
        <!-- -main content- -->
<div class='container'>
    <br><br>
  <div id='table1' > 
  
         <h3>Συχνότητα Κατανάλωσης τροφίμων </h3>
         <br>
             <form class='form-horizontal' action='exec_freq.php' method='post'>
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
            <td>  <input type='radio' name='freq' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq' value='five' >≥2φ/ημέρα</td>
         </tr> 
           <tr>
            <th> Κρέας Μοσχάρι/Κιμάς  </th>
            <td> 140g </td>
           <td>  <input type='radio' name='freq1' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq1' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq1' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq1' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq1' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq1' value='five' >≥2φ/ημέρα</td>
         </tr> 
           <tr>
            <th> Κρέας Αρνί/Κατσίκι </th>
            <td> 140g </td>
            <td>  <input type='radio' name='freq2' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq2' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq2' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq2' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq2' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq2' value='five' >≥2φ/ημέρα</td>
         </tr> 
         <tr>
            <th> Κοτόπουλο </th>
            <td> 140g </td>
            <td>  <input type='radio' name='freq3' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq3' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq3' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq3' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq3' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq3' value='five' >≥2φ/ημέρα</td>
         </tr> 
         <tr>
            <th> Κουνέλι </th>
            <td> 140g </td>
             <td>  <input type='radio' name='freq4' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq4' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq4' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq4' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq4' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq4' value='five' >≥2φ/ημέρα</td>
         </tr> 
         <tr>
            <th> Γαλοπούλα </th>
            <td> 140g </td>
             <td>  <input type='radio' name='freq5' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq5' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq5' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq5' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq5' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq5' value='five' >≥2φ/ημέρα</td>
         </tr> 
         <tr>
            <th> Κυνήγι(λαγός,αγριογούρουνο κλπ) </th>
            <td> 140g </td>
             <td>  <input type='radio' name='freq6' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq6' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq6' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq6' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq6' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq6' value='five' >≥2φ/ημέρα</td>
         </tr>
       <tr>
            <th> Κονσέρβα (Χορινό) </th>
            <td> 140g </td>
             <td>  <input type='radio' name='freq7' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq7' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq7' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq7' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq7' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq7' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Αλλαντικά Χοιρινά (ζαμπόν, μπέικον,σαλάμι κλπ) </th>
            <td> 30g </td>
             <td>  <input type='radio' name='freq8' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq8' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq8' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq8' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq8' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq8' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Αλλαντικά Γαλοπούλας </th>
            <td> 30g </td>
             <td>  <input type='radio' name='freq9' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq9' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq9' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq9' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq9' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq9' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ψάρι Φρέσκο(αθερίνα, γαύρος κλπ) </th>
            <td> 140g </td>
             <td>  <input type='radio' name='freq10' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq10' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq10' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq10' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq10' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq10' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ψάρι παστό/κονσέρβα (μπακαλιάρος κλπ) </th>
            <td> 140g </td>
             <td>  <input type='radio' name='freq11' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq11' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq11' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq11' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq11' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq11' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Θαλασσινά (καλαμάρι, χταπόδι, μπιφτέκια θαλασσινών κλπ)  </th>
            <td> 140g </td>
             <td>  <input type='radio' name='freq12' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq12' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq12' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq12' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq12' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq12' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Οστρακοειδή </th>
            <td> 140g </td>
             <td>  <input type='radio' name='freq13' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq13' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq13' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq13' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq13' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq13' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Εντόσθια (συκώτι χοιρινό, κοτόπουλο, μοσχάρι) </th>
            <td> 140g </td>
             <td>  <input type='radio' name='freq14' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq14' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq14' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq14' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq14' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq14' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Σαλιγγάρια </th>
            <td> 10τμ </td>
             <td>  <input type='radio' name='freq15' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq15' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq15' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq15' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq15' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq15' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Αυγά (βραστά, τηγανιτά, ομελέτα, για παρασκευή εδεσμάτων) </th>
            <td> 1τμ </td>
             <td>  <input type='radio' name='freq16' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq16' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq16' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq16' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq16' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq16' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ζωμός Κρέατος (κατα το μαγείρεμα) </th>
            <td> 1/3 φλ. </td>
             <td>  <input type='radio' name='freq17' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq17' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq17' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq17' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq17' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq17' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Όσπρια (φασόλια, φακές, φάβα, ρεβύθια, κουκιά, αρακάς) </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq18' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq18' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq18' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq18' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq18' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq18' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Σόγια (φασόλια σόγιας/φύτρες σόγιας)  </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq19' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq19' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq19' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq19' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq19' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq19' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Τυρί Πλήρους Λιπαρών(φέτα, κασέρι, κεφαλοτύρι) </th>
            <td> 30g </td>
             <td>  <input type='radio' name='freq20' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq20' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq20' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq20' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq20' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq20' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Τυρί Υψηλό σε Αλάτι (γραβιέρα, παρμεζάνα) </th>
            <td> 30g </td>
             <td>  <input type='radio' name='freq21' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq21' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq21' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq21' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq21' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq21' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Τυρί 12% Λιπαρά (μυζήθρα, ανθότυρο) </th>
            <td> 30g </td>
             <td>  <input type='radio' name='freq22' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq22' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq22' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq22' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq22' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq22' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Cottage Cheese (flair) </th>
            <td> 60g </td>
             <td>  <input type='radio' name='freq23' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq23' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq23' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq23' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq23' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq23' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Τυρί απο Σόγια (νηστήσιμο) </th>
            <td> 30g </td>
             <td>  <input type='radio' name='freq24' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq24' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq24' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq24' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq24' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq24' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Γάλα Πρόβειο/Κατσικίσιο Πλήρες </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq25' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq25' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq25' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq25' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq25' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq25' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Γάλα Ζαχαρούχο </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq26' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq26' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq26' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq26' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq26' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq26' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Φρέσκο Γάλα Αγελαδινό Πλήρες(3,5%) </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq27' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq27' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq27' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq27' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq27' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq27' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Φρέσκο Γάλα Αποβουτυρωμένο(1,5%) </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq28' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq28' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq28' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq28' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq28' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq28' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Φρέσκο Γάλα Άπαχο(0%) </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq29' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq29' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq29' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq29' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq29' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq29' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Σοκολατούχο Γάλα Πλήρες </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq30' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq30' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq30' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq30' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq30' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq30' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Γάλα/Ρόφημα Σόγιας </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq31' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq31' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq31' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq31' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq31' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq31' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Γάλα Κακάκο (0% ζάχαρη 0% λιπαρά) </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq32' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq32' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq32' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq32' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq32' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq32' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Γιαούρτι Πρόβειο </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq33' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq33' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq33' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq33' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq33' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq33' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Γιαούρτι Αγελαδινό Στραγγιστό Πλήρες (10%) </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq34' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq34' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq34' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq34' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq34' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq34' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Γιαούρτι Αγελαδινό με Λίγα Λιπαρά (2%) </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq35' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq35' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq35' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq35' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq35' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq35' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Γιαούρτι Αγελαδινό με 0% </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq36' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq36' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq36' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq36' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq36' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq36' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Επιδόρπιο Γιαουρτιού </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq37' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq37' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq37' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq37' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq37' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq37' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Κρέμα Γάλακτος </th>
            <td> 1/2 φλ. </td>
             <td>  <input type='radio' name='freq38' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq38' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq38' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq38' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq38' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq38' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Κρέμα Γάλακτος Light </th>
            <td> 1/2 φλ. </td>
             <td>  <input type='radio' name='freq39' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq39' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq39' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq39' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq39' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq39' value='five' >≥2φ/ημέρα</td>
         </tr>
            <tr>
            <th> Κρέμα Ζαχαροπλαστικής </th>
            <td> 1/2 φλ. </td>
             <td>  <input type='radio' name='freq40' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq40' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq40' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq40' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq40' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq40' value='five' >≥2φ/ημέρα</td>
         </tr>
               <tr>
            <th> Σαντιγί </th>
            <td> 1/2 φλ. </td>
             <td>  <input type='radio' name='freq41' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq41' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq41' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq41' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq41' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq41' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ζελέ </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq42' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq42' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq42' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq42' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq42' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq42' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ζελέ Light </th>
            <td> 1 φλ. </td>
             <td>  <input type='radio' name='freq43' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq43' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq43' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq43' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq43' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq43' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ψωμί Λευκό </th>
            <td> 1 φέτα </td>
             <td>  <input type='radio' name='freq44' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq44' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq44' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq44' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq44' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq44' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ψωμί Ολικής Αλέσεως/Σικάλεως </th>
            <td> 1 φέτα </td>
             <td>  <input type='radio' name='freq45' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq45' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq45' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq45' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq45' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq45' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ντάκο </th>
            <td> 60g </td>
             <td>  <input type='radio' name='freq46' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq46' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq46' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq46' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq46' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq46' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Παξιμάδι Κρίθινο </th>
            <td> 60g </td>
             <td>  <input type='radio' name='freq47' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq47' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq47' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq47' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq47' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq47' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Παξιμάδι Σταρένιο </th>
            <td> 60g </td>
             <td>  <input type='radio' name='freq48' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq48' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq48' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq48' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq48' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq48' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Φρυγανιές Σικάλεως/Ολικής </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq49' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq49' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq49' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq49' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq49' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq49' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Φρυγανιές Σταρένιες </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq50' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq50' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq50' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq50' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq50' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq50' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Κριτσίνια Σίτου </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq51' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq51' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq51' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq51' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq51' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq51' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Κριτσίνια Πολύσπορα </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq52' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq52' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq52' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq52' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq52' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq52' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Κουλούρι Με Σουσάμι/Σταφιδόψωμο </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq53' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq53' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq53' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq53' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq53' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq53' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Κουλούρι Γεμιστό </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq54' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq54' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq54' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq54' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq54' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq54' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Πιροσκί </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq55' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq55' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq55' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq55' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq55' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq55' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Πίτα Κυπριακή </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq56' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq56' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq56' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq56' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq56' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq56' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Πίτα για Σουβλάκια </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq57' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq57' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq57' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq57' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq57' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq57' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ζάχαρη </th>
            <td> 1 κ.γ. </td>
             <td>  <input type='radio' name='freq58' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq58' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq58' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq58' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq58' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq58' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μέλι </th>
            <td> 1 κ.γ. </td>
             <td>  <input type='radio' name='freq59' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq59' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq59' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq59' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq59' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq59' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μαρμελάδα </th>
            <td> 1 κ.γ. </td>
             <td>  <input type='radio' name='freq60' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq60' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq60' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq60' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq60' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq60' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ζυμαρικά Σικάλεως(λευκά σπαγγέτι, κριθαράκι κλπ) </th>
            <td> 240g </td>
             <td>  <input type='radio' name='freq61' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq61' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq61' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq61' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq61' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq61' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ζυμαρικά Ολικής </th>
            <td> 240g </td>
             <td>  <input type='radio' name='freq62' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq62' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq62' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq62' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq62' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq62' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Καλαμπόκι </th>
            <td> 50g </td>
             <td>  <input type='radio' name='freq63' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq63' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq63' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq63' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq63' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq63' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Παστίτσιο/Μουσακά </th>
            <td> 250g </td>
             <td>  <input type='radio' name='freq64' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq64' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq64' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq64' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq64' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq64' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Πίτες </th>
            <td> 120g </td>
             <td>  <input type='radio' name='freq65' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq65' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq65' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq65' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq65' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq65' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Πατάτες Βραστές/Πουρές χωρίς Γάλα </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq66' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq66' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq66' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq66' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq66' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq66' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Πατάτες Τηγανητές </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq67' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq67' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq67' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq67' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq67' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq67' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Πατάτες Ψητές/Φούρνου </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq68' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq68' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq68' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq68' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq68' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq68' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ταραμάς </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq69' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq69' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq69' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq69' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq69' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq69' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ρύζι Βραστό (Λευκό) </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq70' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq70' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq70' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq70' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq70' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq70' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ρύζι Ανάμικτο/Καστανό </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq71' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq71' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq71' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq71' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq71' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq71' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Τραχανάς </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq72' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq72' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq72' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq72' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq72' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq72' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ντολμαδάκια με Κιμά/Λαχανοντολμάδες/Γεμιστά </th>
            <td> 4 τμ </td>
             <td>  <input type='radio' name='freq73' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq73' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq73' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq73' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq73' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq73' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ντολμαδάκια χωρίς Κιμά/Γεμιστά/Σπανακόρυζο κ.α. </th>
            <td> 4 τμ </td>
             <td>  <input type='radio' name='freq74' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq74' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq74' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq74' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq74' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq74' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Πίτσα </th>
            <td> 1 κομ </td>
             <td>  <input type='radio' name='freq75' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq75' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq75' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq75' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq75' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq75' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ξηροί Καρποί </th>
            <td> 5-6 τμ </td>
             <td>  <input type='radio' name='freq76' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq76' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq76' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq76' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq76' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq76' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Φρέσκα Λαχανικά Εποχής </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq77' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq77' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq77' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq77' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq77' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq77' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Βρασμένα Λαχανικά Εποχής </th>
            <td> 1/2 φλ </td>
             <td>  <input type='radio' name='freq78' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq78' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq78' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq78' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq78' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq78' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μαγειρεμένα Λαχανικά (κυρίως γεύμα πχ. Φασολάκια, Ιμαμ κλπ) </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq79' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq79' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq79' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq79' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq79' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq79' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Τουρσί </th>
            <td> 1/2 φλ </td>
             <td>  <input type='radio' name='freq80' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq80' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq80' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq80' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq80' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq80' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Φρούτα Φρέσκα Εποχής </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq81' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq81' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq81' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq81' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq81' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq81' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Κομπόστες </th>
            <td> 1/2 φλ </td>
             <td>  <input type='radio' name='freq82' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq82' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq82' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq82' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq82' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq82' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Αποξηραμένα Φρούτα </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq83' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq83' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq83' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq83' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq83' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq83' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Χυμοί Φρούτων (φυσικοί) </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq84' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq84' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq84' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq84' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq84' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq84' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Χυμοί Εμπορίου </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq85' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq85' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq85' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq85' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq85' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq85' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Λεμονάδες/Πορτοκαλάδες με ζάχαρη </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq86' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq86' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq86' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq86' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq86' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq86' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Άλλα Αναψυκτικά </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq87' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq87' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq87' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq87' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq87' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq87' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Αναψυκτικά τύπου Cola </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq88' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq88' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq88' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq88' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq88' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq88' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Αναψυτκικά τύπου Cola Light </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq89' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq89' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq89' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq89' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq89' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq89' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Άλλα Αναψυκτικά Light</th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq90' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq90' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq90' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq90' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq90' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq90' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ενεργειακά Ποτά (Redbull κλπ) </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq91' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq91' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq91' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq91' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq91' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq91' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ισοτονικά Ποτά </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq92' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq92' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq92' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq92' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq92' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq92' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Βούτυρο (Ζωικό) </th>
            <td> 1 κ.γ. </td>
             <td>  <input type='radio' name='freq93' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq93' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq93' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq93' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq93' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq93' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μαργαρίνη (Φυτική) </th>
            <td> 1 κ.γ. </td>
             <td>  <input type='radio' name='freq94' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq94' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq94' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq94' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq94' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq94' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μαργαρίνη τύπου Becel </th>
            <td> 1 κ.γ. </td>
             <td>  <input type='radio' name='freq95' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq95' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq95' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq95' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq95' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq95' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ελαιόλαδο </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq96' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq96' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq96' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq96' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq96' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq96' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Σπορέλαια </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq97' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq97' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq97' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq97' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq97' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq97' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ελιές </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq98' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq98' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq98' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq98' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq98' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq98' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μαγιονέζα </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq99' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq99' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq99' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq99' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq99' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq99' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μαγιονέζα Light </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq100' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq100' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq100' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq100' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq100' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq100' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Λουκουμάδες </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq101' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq101' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq101' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq101' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq101' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq101' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Γλυκά Κουταλιού </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq102' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq102' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq102' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq102' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq102' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq102' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Πάστες/Σοκολατίνες/Γλυκά Σοκολάτας </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq103' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq103' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq103' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq103' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq103' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq103' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μπισκότα/Κεικ/Κουλουράκια Βουτύρου απλά/Κρουασάν </th>
            <td>  </td>
             <td>  <input type='radio' name='freq104' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq104' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq104' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq104' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq104' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq104' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μπισκότα/Κεικ με Σοκολάτα (γέμιση)</th>
            <td>  </td>
             <td>  <input type='radio' name='freq105' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq105' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq105' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq105' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq105' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq105' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Καραμέλες με Ζάχαρη/Λουκούμια </th>
            <td> 1 τμ </td>
             <td>  <input type='radio' name='freq106' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq106' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq106' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq106' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq106' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq106' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Παστέλι απλό με Σουσάμι </th>
            <td> 40g </td>
             <td>  <input type='radio' name='freq107' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq107' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq107' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq107' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq107' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq107' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Παστέλι με Ξηρούς Καρπούς </th>
            <td> 40g </td>
             <td>  <input type='radio' name='freq108' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq108' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq108' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq108' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq108' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq108' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Χαλβάς με Ταχίνι </th>
            <td> 40g </td>
             <td>  <input type='radio' name='freq109' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq109' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq109' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq109' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq109' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq109' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Χαλβάς Σιμιγδαλένιος </th>
            <td> 40g </td>
             <td>  <input type='radio' name='freq110' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq110' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq110' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq110' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq110' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq110' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Καφές (Ελληνικός, γαλλικός, espresso, νες) </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq111' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq111' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq111' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq111' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq111' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq111' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ντεκαφεϊνέ </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq112' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq112' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq112' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq112' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq112' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq112' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Κακάο </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq113' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq113' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq113' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq113' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq113' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq113' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Σοκολάτα Ρόφημα </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq114' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq114' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq114' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq114' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq114' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq114' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Τσάι Μαύρο </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq115' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq115' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq115' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq115' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq115' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq115' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Τσάι Πράσινο </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq116' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq116' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq116' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq116' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq116' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq116' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Αφεψήματα </th>
            <td> 1 φλ </td>
             <td>  <input type='radio' name='freq117' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq117' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq117' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq117' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq117' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq117' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Κρασί </th>
            <td> 90ml </td>
             <td>  <input type='radio' name='freq118' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq118' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq118' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq118' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq118' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq118' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μπύρα </th>
            <td> 330ml </td>
             <td>  <input type='radio' name='freq119' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq119' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq119' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq119' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq119' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq119' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μπύρα χωρίς Αλκοόλ </th>
            <td> 330ml </td>
             <td>  <input type='radio' name='freq120' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq120' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq120' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq120' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq120' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq120' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ρακί/Ούζο/Τσίπουρο </th>
            <td> 40ml </td>
             <td>  <input type='radio' name='freq121' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq121' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq121' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq121' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq121' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq121' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Οινοπνευματώδη 40ο (Ουίσκι/μπράντυ,τζιν,λευκή τεκίλα,βότκα) </th>
            <td> 40ml </td>
             <td>  <input type='radio' name='freq122' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq122' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq122' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq122' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq122' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq122' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Corn Flakes </th>
            <td> 1/2 φλ </td>
             <td>  <input type='radio' name='freq123' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq123' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq123' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq123' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq123' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq123' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Δημητριακά Πρωινού τύπου Fitness(σκέτα ή με γεύσεις) </th>
            <td> 1/2 φλ </td>
             <td>  <input type='radio' name='freq124' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq124' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq124' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq124' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq124' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq124' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Δημητριακά Ρυζιού (π.χ. Coco Pops) </th>
            <td> 1/2 φλ </td>
             <td>  <input type='radio' name='freq125' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq125' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq125' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq125' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq125' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq125' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Δημητριακά με Σοκολάτα </th>
            <td> 1/2 φλ </td>
             <td>  <input type='radio' name='freq126' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq126' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq126' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq126' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq126' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq126' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μούσλι Δημητριακών </th>
            <td> 1/2 φλ </td>
             <td>  <input type='radio' name='freq127' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq127' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq127' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq127' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq127' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq127' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Ταχίνι </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq128' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq128' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq128' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq128' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq128' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq128' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Φυστικοβούτυρο </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq129' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq129' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq129' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq129' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq129' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq129' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Παγωτά 0%-Γρανίτες </th>
            <td> 80g </td>
             <td>  <input type='radio' name='freq130' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq130' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq130' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq130' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq130' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq130' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Πατατάκια/Γαριδάκια </th>
            <td> 40g </td>
             <td>  <input type='radio' name='freq131' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq131' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq131' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq131' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq131' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq131' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Σαλάτες Αλοιφή (μελιτζανοσαλάτα, τζατζίκι κλπ) </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq132' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq132' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq132' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq132' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq132' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq132' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Κέτσαπ </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq133' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq133' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq133' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq133' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq133' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq133' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Μουστάρδα </th>
            <td> 1 κ.σ. </td>
             <td>  <input type='radio' name='freq134' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq134' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq134' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq134' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq134' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq134' value='five' >≥2φ/ημέρα</td>
         </tr>
         <tr>
            <th> Νερό </th>
            <td> 1 ποτ. </td>
             <td>  <input type='radio' name='freq135' value='zero' >Ποτέ/Σπάνια </td>
            <td> <input type='radio' name='freq135' value='one' >1-3φ/μήνα  </td>
            <td> <input type='radio' name='freq135' value='two' >1-2φ/εβδομ. </td>
            <td> <input type='radio' name='freq135' value='three' >3-6φ/εβδομ. </td>
            <td> <input type='radio' name='freq135' value='four' >1φ/ημέρα</td>
            <td> <input type='radio' name='freq135' value='five' >≥2φ/ημέρα</td>
         </tr>
         
         
         
      
         
         
         
         
         
            </table>
                  <div class='form-group'>
                  <div class='col-sm-offset-5 col-sm-2'>
                      <button type='submit' class='btn btn-default'>Αποθήκευση</button>
                  </div>
                </div>
            </form>

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

    mysqli_close($conn); 