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
        
        
        
          $food=filter_input(INPUT_POST, 'q');
     
            $sql0="SELECT * FROM `pinakas_trofimon` WHERE `trofimo` = '$food'";
$result01= mysqli_query($conn, $sql0);

 
 echo "
<html>
<head>
</head>
";
while($row = mysqli_fetch_array($result01)) {
    echo "      
        <div id='table1' > 
          <h2>Πληροφορίες Τροφίμου</h2>
            <table class='table'>
        <tr>
           <th><h3>Μακροσυστατικά</h3></th>
           <td><h3>Ποσότητα</h3></td>
<td><h3>Μονάδα Μέτρησης</h3></td>
         
           </tr>
           <tr>
             <th>Ενέργεια &emsp;&emsp;&emsp;</th>
            <td> ". $row['Energeia'] ." </td>
                 <td>&emsp;&emsp; Kcal/100g </td>
         </tr>
         <tr>
             <th>Πρωτεϊνη &emsp;&emsp;&emsp;</th>
          <td> ". $row['Proteini'] . "</td>
              <td>&emsp;&emsp; g/100g </td>
           </tr>
           <tr>
             <th>Υδατάνθρακες &emsp;&emsp;&emsp;</th>
               <td>" . $row['Ydatanthrakes'] . "</td>
                   <td>&emsp;&emsp; g/100g </td>
        </tr>
        <tr>
             <th>Λίπος &emsp;&emsp;&emsp;</th>
            <td>" . $row['Lipos'] . "</td>
                <td>&emsp;&emsp; g/100g </td>
        </tr>
        <tr>
         <th>Κορεσμένα &emsp;&emsp;&emsp;</th>
          <td>" . $row['koresmena'] . "</td>
              <td>&emsp;&emsp; % σύσταση λίπους </td>
         </tr>
          <tr>
         <th>Μονοακόρεστα &emsp;&emsp;&emsp;</th>
          <td>" . $row['monoakoresta'] . "</td>
              <td>&emsp;&emsp; % σύσταση λίπους </td>
         </tr>
          <tr>
         <th>Πολυακόρεστα &emsp;&emsp;&emsp;</th>
          <td>" . $row['poluakoresta'] . "</td>
              <td>&emsp;&emsp; % σύσταση λίπους </td>
         </tr>
          <tr>
         <th>Trans &emsp;&emsp;&emsp;</th>
          <td>" . $row['trans'] . "</td>
              <td>&emsp;&emsp; % σύσταση λίπους </td>
         </tr>
          <tr>
         <th>Ω3 &emsp;&emsp;&emsp;</th>
          <td>" . $row['w3'] . "</td>
              <td>&emsp;&emsp; % σύσταση λίπους </td>
         </tr>
          <tr>
         <th>Ω6 &emsp;&emsp;&emsp;</th>
          <td>" . $row['w6'] . "</td>
              <td>&emsp;&emsp; % σύσταση λίπους </td>
         </tr>
          <tr>
         <th>Νερό &emsp;&emsp;&emsp;</th>
          <td>" . $row['Nero'] . "</td>
              <td>&emsp;&emsp; g/100g </td>
         </tr>
          <tr>
         <th>Διαιτητικές Ίνες&emsp;&emsp;&emsp;</th>
          <td>" . $row['Diaititikes_Ines'] . "</td>
              <td>&emsp;&emsp; g/100g </td>
         </tr>
          <tr>
         <th>Χοληστερόλη&emsp;&emsp;&emsp;</th>
          <td>" . $row['Xolisteroli'] . "</td>
              <td>&emsp;&emsp; mg/100g </td>
         </tr>
         <tr>
             <th><h3>Βιταμίνες</h3></th>
             <td> </td>
             <td> </td>
        </tr>    
        <tr>
        <th>α-τοκοφερόλη&emsp;&emsp;&emsp;</th>
          <td>" . $row['atoko'] . "</td>
              <td>&emsp;&emsp; mg/100g </td>
         </tr>
           <tr>
             <th><h3>Μέταλα & Ιχνοστοιχεία</h3></th>
             <td> </td>
             <td> </td>
        </tr>  
        <tr>
        <th>Ασβέστιο&emsp;&emsp;&emsp;</th>
          <td>" . $row['Asvestio'] . "</td>
              <td>&emsp;&emsp; mg/100g </td>
         </tr>
         <tr>
        <th>Κάλλιο&emsp;&emsp;&emsp;</th>
          <td>" . $row['Kalio'] . "</td>
              <td>&emsp;&emsp; mg/100g </td>
         </tr>
         <tr>
        <th>Μαγνήσιο&emsp;&emsp;&emsp;</th>
          <td>" . $row['Magnisio'] . "</td>
              <td>&emsp;&emsp; mg/100g </td>
         </tr>
         <tr>
        <th>Νάτριο&emsp;&emsp;&emsp;</th>
          <td>" . $row['Natrio'] . "</td>
              <td>&emsp;&emsp; mg/100g </td>
         </tr>
         <tr>
        <th>Σελήνιο&emsp;&emsp;&emsp;</th>
          <td>" . $row['Selinio'] . "</td>
              <td>&emsp;&emsp; μg/100g </td>
         </tr>
         <tr>
        <th>Σίδηρος&emsp;&emsp;&emsp;</th>
          <td>" . $row['Sidiros'] . "</td>
              <td>&emsp;&emsp; mg/100g </td>
         </tr>
         <tr>
        <th>Φώσφορος&emsp;&emsp;&emsp;</th>
          <td>" . $row['Phosphoros'] . "</td>
              <td>&emsp;&emsp; mg/100g </td>
         </tr>
         <tr>
        <th>Χρώμιο&emsp;&emsp;&emsp;</th>
          <td>" . $row['Xromio'] . "</td>
              <td>&emsp;&emsp; μg/100g </td>
         </tr>
              <tr>
             <th><h3>Μη Θρεπτικά Στοιχεία</h3></th>
             <td> </td>
             <td> </td>
        </tr> 
           <tr>
        <th>Πολυφαινόλες&emsp;&emsp;&emsp;</th>
          <td>" . $row['Polufainoles'] . "</td>
              <td>&emsp;&emsp; mg/100g </td>
         </tr>
";
    

}
echo "</table> 
 </body>
 </html>"
       ;

    mysqli_close($conn); 