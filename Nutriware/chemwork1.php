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

     $sql0="SELECT * FROM `viochimikos_elegxos` WHERE `Cid` = '$cid' and `Date`='$sdate'";
$result01= mysqli_query($conn, $sql0);
 $row3=mysqli_fetch_assoc($result01);
  
  echo "
  <div id='table1' > 
         <h3>Βιοχημικές Εξετάσεις </h3>
            <table class='table'>
              <tr>
             <th>Περιγραφή &emsp;&emsp;&emsp;</th>
            <td> Αποτελέσματα </td>
            <td>Μονάδα Μέτρησης</td>
            <td>Τιμές Αναφοράς</td>
         </tr>  
        <tr>
             <th>Χοληστερόλη Ολική &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Xolisteroli_oliki'] ." </td>
                 <td>&emsp;&emsp; mg/dL </td>
                 <td>Γ:<200 Α:<200</td>
         </tr>    
          <tr>
             <th>HDL Χοληστερόλη &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Hdl'] ." </td>
                 <td>&emsp;&emsp; mg/dL </td>
                 <td>Γ:40-60 Α:40-60</td>
         </tr>    
          <tr>
             <th>LDL Χοληστερόλη &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Ldl'] ." </td>
                 <td>&emsp;&emsp; mg/dL </td>
                 <td>Γ:<30 Α:<30</td>
         </tr>    
          <tr>
             <th>Σίδηρος Ορού &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Sidiros_orou'] ." </td>
                 <td>&emsp;&emsp; μg/dL </td>
                 <td>Γ:50-170 Α:55-160</td>
         </tr>    
          <tr>
             <th>Γλυκόζη &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Glukozi'] ." </td>
                 <td>&emsp;&emsp; mg/dL  </td>
                 <td>Γ:70-110 Α:70-100</td>
         </tr>    
          <tr>
             <th>Ουρία &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Ouria'] ." </td>
                 <td>&emsp;&emsp; mg/dL  </td>
                 <td>Γ:15-40 Α:18-55</td>
         </tr>    
          <tr>
             <th>Κρεατινίνη Ορού  &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Kreatinini_orou'] ." </td>
                 <td>&emsp;&emsp; mg/dL  </td>
                 <td>Γ:0,57-1,11 Α:0,71-1,25</td>
         </tr>    
          <tr>
             <th>Κάλλιο &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Kalio'] ." </td>
                 <td>&emsp;&emsp; Eq/L </td>
                 <td>Γ:3,35-5,3 Α:3,3,35-5,3</td>
         </tr> 
                <tr>
             <th>Νάτριο &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Natrio'] ." </td>
                 <td>&emsp;&emsp; Eq/L </td>
                 <td>Γ:135-153 Α:135-153</td>
         </tr>
             <tr>
             <th>Ουρικό Οξύ &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Ouriko_oksi'] ." </td>
                 <td>&emsp;&emsp; mg/dL  </td>
                 <td>Γ:2,4-6,0 Α:3,5-7,2</td>
         </tr>  
             <tr>
             <th>Τριγλυκερίδια &emsp;&emsp;&emsp;</th>
            <td> ". $row3['Triglukeridia'] ." </td>
                 <td>&emsp;&emsp; mg/dL  </td>
                 <td>Γ:<150 Α:<150</td>
         </tr>  
</table>         


      ";

   $phpArray = array(
    0 => $row3['Xolisteroli_oliki'],
    1 =>$row3['Hdl'], 
    2 => $row3['Ldl'],
    3 => $row3['Sidiros_orou'],
    4 =>$row3['Glukozi'],
    5 => $row3['Ouria'],
    6 =>$row3['Kreatinini_orou'],
    7 => $row3['Kalio'],
    8 => $row3['Natrio'],
    9 => $row3['Ouriko_oksi'],
    10 => $row3['Triglukeridia'],
    11 => $fname,
    12 => $lname,
    13 => $ddate
    );
   
   echo "</div>
<button  class=\"btn btn-default\" onClick='test(". json_encode($phpArray).");'>Εξαγωγή σε Αρχείο</button>
    
    </body>
    </html>";
   
  mysqli_close($conn); 