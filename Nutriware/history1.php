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
    $sdate=filter_input(INPUT_POST, 'q');

 
    $sql="SELECT * FROM `nutritionist` WHERE `Username` = '$Nuname' ";
    $res=mysqli_query($conn, $sql);
    $row= mysqli_fetch_assoc($res);
    $nid=$row['Nid'];
    $NFname=$row['Fname'];
    $NLname=$row['Lname'];
  
    $client=$_SESSION['client'];
    $sql1="SELECT * FROM `client` WHERE `Username` = '$client'";
    $res1=mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_assoc($res1);
    $cid=$row1['Cid'];
    $fname=$row1['Fname'];
    $lname=$row1['Lname'];
    $sql2="SELECT * FROM `diet` WHERE `Nid` = '$nid' and `Cid`='$cid' ";
    $res2= mysqli_query($conn, $sql2);
  
     $sql000="SELECT * FROM `general` WHERE `Cid` = '$cid'";
    $res000=mysqli_query($conn, $sql000);
    $row000= mysqli_fetch_assoc($res000);
    $weight=$row000['Varos'];
    
      $sql001="SELECT * FROM `events` WHERE `Cid` = '$cid' ORDER BY `Date` DESC, `Time` DESC ";
      $res001= mysqli_query($conn, $sql001);
        $event=mysqli_fetch_assoc($res001);
        $today=date("Y-m-d");
        if($event['Date']>$today){
          $next= date('d-m-Y', strtotime($event['Date'])) .' '. $event['Time'];  
        }else{
            $next='-';
        }
    
    
     $sql0="SELECT * FROM `diet` WHERE `Nid` = '$nid' and `Cid`='$cid' and `Date`='$sdate'";
$result01= mysqli_query($conn, $sql0);
 $row01=mysqli_fetch_assoc($result01);
  $did=$row01['Did'];
  $ddate=date('d-m-Y', strtotime($row01['Date']));
  $comments = str_replace("<br />" ,"\n" ,$row01['Comments'] );
  echo " <h3>Σχόλια</h3>";
  echo " <textarea  class='form-control' id='comments' name='comments'  readonly>".$comments."</textarea>";
  
   $sql_day="SELECT * FROM `day` WHERE `Number` = 1 and `Did`='$did' and `Date`='$sdate'";
$res_day= mysqli_query($conn, $sql_day);
$row3=mysqli_fetch_assoc($res_day);
   echo "
     

        <div id='table1' > 
        <table class='table' id='content'>
           <tr>
           <th><h3>1η Ημέρα</h3></th>
           <td> </td>
           </tr>
           
        <tr>
             <th>Πρωινό </th>
            <td> ". $row3['Proino'] ." </td>       
         </tr>
         <tr>
             <th>Δεκατιανό </th>
            <td> ". $row3['Dekatiano'] ." </td>       
         </tr>
         <tr>
             <th>Μεσημεριανό </th>
            <td> ". $row3['Mesimeriano'] ." </td>       
         </tr>
         <tr>
             <th>Απογευματινό </th>
            <td> ". $row3['Apogeumatino'] ." </td>       
         </tr>
         <tr>
             <th>Βραδινό </th>
            <td> ". $row3['Vradino'] ." </td>       
         </tr>
      

";
 

    $sql_day2="SELECT * FROM `day` WHERE `Number` = 2 and `Did`='$did' and `Date`='$sdate'";
$res_day2= mysqli_query($conn, $sql_day2);
$row32=mysqli_fetch_assoc($res_day2);
 echo "
        
           <tr>
           <th><h3>2η Ημέρα</h3></th>
           <td> </td>
           </tr>
         
        <tr>
             <th>Πρωινό </th>
            <td> ". $row32['Proino'] ." </td>       
         </tr>
         <tr>
             <th>Δεκατιανό </th>
            <td> ". $row32['Dekatiano'] ." </td>       
         </tr>
         <tr>
             <th>Μεσημεριανό </th>
            <td> ". $row32['Mesimeriano'] ." </td>       
         </tr>
         <tr>
             <th>Απογευματινό </th>
            <td> ". $row32['Apogeumatino'] ." </td>       
         </tr>
         <tr>
             <th>Βραδινό </th>
            <td> ". $row32['Vradino'] ." </td>       
         </tr>
 
";
   
    $sql_day3="SELECT * FROM `day` WHERE `Number` = 3 and `Did`='$did' and `Date`='$sdate' ";
$res_day3= mysqli_query($conn, $sql_day3);
$row33=mysqli_fetch_assoc($res_day3);
  echo "
       
           <tr>
           <th><h3>3η Ημέρα</h3></th>
           <td> </td>
           </tr>
         
        <tr>
             <th>Πρωινό </th>
            <td> ". $row33['Proino'] ." </td>       
         </tr>
         <tr>
             <th>Δεκατιανό </th>
            <td> ". $row33['Dekatiano'] ." </td>       
         </tr>
         <tr>
             <th>Μεσημεριανό </th>
            <td> ". $row33['Mesimeriano'] ." </td>       
         </tr>
         <tr>
             <th>Απογευματινό </th>
            <td> ". $row33['Apogeumatino'] ." </td>       
         </tr>
         <tr>
             <th>Βραδινό </th>
            <td> ". $row33['Vradino'] ." </td>       
         </tr>
       
  
";
   
    $sql_day4="SELECT * FROM `day` WHERE `Number` = 4 and `Did`='$did' and `Date`='$sdate' ";
$res_day4= mysqli_query($conn, $sql_day4);
$row34=mysqli_fetch_assoc($res_day4);
 echo "
     
           <tr>
           <th><h3>4η Ημέρα</h3></th>
           <td> </td>
           </tr>
         
        <tr>
             <th>Πρωινό </th>
            <td> ". $row34['Proino'] ." </td>       
         </tr>
         <tr>
             <th>Δεκατιανό </th>
            <td> ". $row34['Dekatiano'] ." </td>       
         </tr>
         <tr>
             <th>Μεσημεριανό </th>
            <td> ". $row34['Mesimeriano'] ." </td>       
         </tr>
         <tr>
             <th>Απογευματινό </th>
            <td> ". $row34['Apogeumatino'] ." </td>       
         </tr>
         <tr>
             <th>Βραδινό </th>
            <td> ". $row34['Vradino'] ." </td>       
         </tr>
      
  
";
   
    $sql_day5="SELECT * FROM `day` WHERE `Number` = 5 and `Did`='$did' and `Date`='$sdate' ";
$res_day5= mysqli_query($conn, $sql_day5);
$row35=mysqli_fetch_assoc($res_day5);
  echo "
 
           <tr>
           <th><h3>5η Ημέρα</h3></th>
           <td> </td>
           </tr>
         
        <tr>
             <th>Πρωινό </th>
            <td> ". $row35['Proino'] ." </td>       
         </tr>
         <tr>
             <th>Δεκατιανό </th>
            <td> ". $row35['Dekatiano'] ." </td>       
         </tr>
         <tr>
             <th>Μεσημεριανό </th>
            <td> ". $row35['Mesimeriano'] ." </td>       
         </tr>
         <tr>
             <th>Απογευματινό </th>
            <td> ". $row35['Apogeumatino'] ." </td>       
         </tr>
         <tr>
             <th>Βραδινό </th>
            <td> ". $row35['Vradino'] ." </td>       
         </tr>
      
 
";
   
    $sql_day6="SELECT * FROM `day` WHERE `Number` = 6 and `Did`='$did' and `Date`='$sdate'";
$res_day6= mysqli_query($conn, $sql_day6);
$row36=mysqli_fetch_assoc($res_day6);
   echo "
      
           <tr>
           <th><h3>6η Ημέρα</h3></th>
           <td> </td>
           </tr>
          
        <tr>
             <th>Πρωινό </th>
         
            <td> ". $row36['Proino'] ." </td>       
         </tr>
         <tr>
             <th>Δεκατιανό </th>
              
            <td> ". $row36['Dekatiano'] ." </td>       
         </tr>
         <tr>
             <th>Μεσημεριανό </th>
             
            <td> ". $row36['Mesimeriano'] ." </td>       
         </tr>
         <tr>
             <th>Απογευματινό </th>
           
            <td> ". $row36['Apogeumatino'] ." </td>       
         </tr>
         <tr>
             <th>Βραδινό </th>
           
            <td> ". $row36['Vradino'] ." </td>       
         </tr>
      
   
";
   
    $sql_day7="SELECT * FROM `day` WHERE `Number` = 7 and `Did`='$did' and `Date`='$sdate' ";
$res_day7= mysqli_query($conn, $sql_day7);
$row37=mysqli_fetch_assoc($res_day7);
 echo "
        
           <tr>
           <th><h3>7η Ημέρα</h3></th>
           <td> </td>
           </tr>
         
        <tr>
             <th>Πρωινό </th>
             
            <td> ". $row37['Proino'] ." </td>       
         </tr>
         <tr>
             <th>Δεκατιανό </th>
           
            <td> ". $row37['Dekatiano'] ." </td>       
         </tr>
         <tr>
             <th>Μεσημεριανό </th>
            
            <td> ". $row37['Mesimeriano'] ." </td>       
         </tr>
         <tr>
             <th>Απογευματινό </th>
           
            <td> ". $row37['Apogeumatino'] ." </td>       
         </tr>
         <tr>
             <th>Βραδινό </th>
         
            <td> ". $row37['Vradino'] ." </td>       
         </tr>
      
         </table>
</div>    

  ";

   $phpArray = array(
          0 => str_replace("<br />","\r\n",$row3['Proino']), 
          1 =>  str_replace("<br />","\r\n",$row3['Dekatiano']), 
          2 => str_replace("<br />","\r\n",$row3['Mesimeriano']), 
          3 => str_replace("<br />","\r\n",$row3['Apogeumatino']),
          4 => str_replace("<br />","\r\n",$row3['Vradino']),
          5 => str_replace("<br />","\r\n",$row32['Proino']) ,
          6 =>  str_replace("<br />","\r\n",$row32['Dekatiano']) ,
          7 => str_replace("<br />","\r\n",$row32['Mesimeriano']) ,
          8 => str_replace("<br />","\r\n",$row32['Apogeumatino']), 
          9 => str_replace("<br />","\r\n",$row32['Vradino']),
          10 => str_replace("<br />","\r\n",$row33['Proino']) ,
          11 =>  str_replace("<br />","\r\n",$row33['Dekatiano']) ,
          12 => str_replace("<br />","\r\n",$row33['Mesimeriano']),
          13 => str_replace("<br />","\r\n",$row33['Apogeumatino']), 
          14 => str_replace("<br />","\r\n",$row33['Vradino']),
          15 => str_replace("<br />","\r\n",$row34['Proino']) ,
          16 =>  str_replace("<br />","\r\n",$row34['Dekatiano']) ,
          17 => str_replace("<br />","\r\n",$row34['Mesimeriano']) ,
          18 => str_replace("<br />","\r\n",$row34['Apogeumatino']), 
          19 => str_replace("<br />","\r\n",$row34['Vradino']),
          20 => str_replace("<br />","\r\n",$row35['Proino']) ,
          21 =>  str_replace("<br />","\r\n",$row35['Dekatiano']) ,
          22 => str_replace("<br />","\r\n",$row35['Mesimeriano']) ,
          23 => str_replace("<br />","\r\n",$row35['Apogeumatino']), 
          24 => str_replace("<br />","\r\n",$row35['Vradino']),
          25 => str_replace("<br />","\r\n",$row36['Proino'] ),
          26 => str_replace("<br />","\r\n", $row36['Dekatiano'] ),
          27 => str_replace("<br />","\r\n",$row36['Mesimeriano']) ,
          28 => str_replace("<br />","\r\n",$row36['Apogeumatino']), 
          29 => str_replace("<br />","\r\n",$row36['Vradino']),
          30 =>str_replace("<br />","\r\n", $row37['Proino']) ,
          31 =>  str_replace("<br />","\r\n",$row37['Dekatiano']) ,
          32 => str_replace("<br />","\r\n",$row37['Mesimeriano']) ,
          33 => str_replace("<br />","\r\n",$row37['Apogeumatino']), 
          34 => str_replace("<br />","\r\n",$row37['Vradino']),
          35 => $fname,
          36 => $lname,
          37 => $ddate,
          38 => $NFname,
          39 => $NLname,
          40 => $weight,
          41 => $next
    );
    
      
      echo " 
   <button  class=\"btn btn-default\" onClick='test(". json_encode($phpArray).");'>Εξαγωγή σε Αρχείο</button>
     
       

    ";
    
        mysqli_close($conn); 