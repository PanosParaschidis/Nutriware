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
        
        
        
          $sdate=filter_input(INPUT_POST, 'q'); 
            $client=$_SESSION['client'];
    $sql1="SELECT * FROM `client` WHERE `Username` = '$client'";
    $res1=mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_assoc($res1);
    $cid=$row1['Cid'];
     $fname=$row1['Fname'];
    $lname=$row1['Lname'];
         $ddate=date('d-m-Y', strtotime($sdate));
 echo "<html>
     <head>
     </head>
     <body>
       
     
      
";


     $sql0="SELECT * FROM `geniki_aimatos` WHERE `Cid` = '$cid' and `Date`='$sdate'";
$result01= mysqli_query($conn, $sql0);
 $row3=mysqli_fetch_assoc($result01);
  

   echo "
  <div id='table1' > 
         <h3>Αιματολογικές Εξετάσεις </h3>
            <table class='table'>
                  <tr>
             <th>Περιγραφή &emsp;&emsp;&emsp;</th>
            <td> Αποτελέσματα </td>
            <td>Μονάδα Μέτρησης</td>
            <td>Τιμές Αναφοράς</td>
         </tr> 
        <tr>
             <th>Ερυθρά Αιμοσφαίρια &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Erithra'] ." </td>
                 <td>&emsp;&emsp; M/μl </td>
                 <td>Γ:3,8-5,8 Α:4,5-6,1</td>
         </tr>    
          <tr>
             <th>Λευκά Αιμοσφαίρια &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Leuka'] ." </td>
                 <td>&emsp;&emsp; K/μl </td>
                  <td>Γ:4,0-11,0 Α:4,0-11,0</td>
         </tr>    
          <tr>
             <th>Αιματοκρίτης &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Aimatokritis'] ." </td>
                 <td>&emsp;&emsp; % </td>
                  <td>Γ:37-47 Α:41-54</td>
         </tr>    
          <tr>
             <th>Αιμοσφαιρίνη &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Aimosfairini'] ." </td>
                 <td>&emsp;&emsp; g/dL </td>
                  <td>Γ:11,5-16,5 Α:13,0-18,0</td>
         </tr>    
          <tr>
             <th>Αιμοπετάλια &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Aimopetalia'] ." </td>
                 <td>&emsp;&emsp; K/μl </td>
                  <td>Γ:150-400 Α:150-400</td>
         </tr>    
          <tr>
             <th>Μέσος Όγκος Ερυθρών &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Mcv'] ." </td>
                 <td>&emsp;&emsp; fl </td>
                  <td>Γ:76-96 Α:76-96</td>
         </tr>    
          <tr>
             <th>Μέση Περιεκτικότητα Αιμοσφαιρίνης  &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Mch'] ." </td>
                 <td>&emsp;&emsp; pgr </td>
                  <td>Γ:27-33 Α:27-33</td>
         </tr>    
          <tr>
             <th>Φεριτίνη Ορού &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Feritini'] ." </td>
                 <td>&emsp;&emsp; ng/mL </td>
                  <td>Γ:4,63-204 Α:4,63-204</td>
         </tr>    

</table>
      ";
$phpArray = array(
    0 => $row3['Erithra'],
    1 =>$row3['Leuka'], 
    2 => $row3['Aimatokritis'],
    3 => $row3['Aimosfairini'],
    4 =>$row3['Aimopetalia'],
    5 => $row3['Mcv'],
    6 =>$row3['Mch'],
    7 => $row3['Feritini'],
    8 => $fname,
    9 => $lname,
    10 => $ddate
    );
   
   echo "</div>
 <button  class=\"btn btn-default\" onClick='test(". json_encode($phpArray).");'>Εξαγωγή σε Αρχείο</button>
    
    </body>
    </html>";
    
   mysqli_close($conn); 