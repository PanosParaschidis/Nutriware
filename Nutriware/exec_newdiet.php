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
    

$client=filter_input(INPUT_POST, 'client');
$day=filter_input(INPUT_POST, 'day');
$proino=filter_input(INPUT_POST, 'prwino');
$dekatiano=filter_input(INPUT_POST, 'dekatiano');
$lunch=filter_input(INPUT_POST, 'lunch');
$apogeumatino=filter_input(INPUT_POST, 'apogeumatino');
$diner=filter_input(INPUT_POST, 'diner');

 $Nuname=$_SESSION["uname"];
     $sql="SELECT * FROM `nutritionist` WHERE `Username` = '$Nuname' ";
     $res=mysqli_query($conn, $sql);
     $row= mysqli_fetch_assoc($res);
     $nid=$row['Nid'];
     
  $sql1="SELECT * FROM `client` WHERE `Username` = '$client' ";
     $res1=mysqli_query($conn, $sql1);
     $row1= mysqli_fetch_assoc($res1);
     $cid=$row1['Cid'];
     
  $date=date("Y-m-d");

$sql0="SELECT * FROM `diet` WHERE `Nid` = '$nid' and `Cid`='$cid' and `Date`='$date' ";
$result0= mysqli_query($conn, $sql0);


if(!empty($client) and !empty($day) and mysqli_num_rows($result0)==0){
    $sql="INSERT INTO `diet` (`Nid`,`Cid`,`Date`) VALUES ('$nid','$cid','$date')";
    $result= mysqli_query($conn, $sql);
    $sql0="SELECT * FROM `diet` WHERE `Nid` = '$nid' and `Cid`='$cid' and `Date`='$date' ";
$result01= mysqli_query($conn, $sql0);
 $row01=mysqli_fetch_assoc($result01);
  $did=$row01['Did'];
 $sql_day="SELECT * FROM `day` WHERE `Number` = '$day' and `Did`='$did' and `Date`='$date' ";
$res_day= mysqli_query($conn, $sql_day);
if(mysqli_num_rows($res_day)==0){
     $proino1=str_replace("\r\n","<br />",$proino);
    $dekatiano1=str_replace("\r\n","<br />",$dekatiano);
    $lunch1=str_replace("\r\n","<br />",$lunch);
    $apogeumatino1=str_replace("\r\n","<br />",$apogeumatino);
    $diner1=str_replace("\r\n","<br />",$diner);
    $sql1="INSERT INTO `day` (`Proino`,`Dekatiano`,`Mesimeriano`,`Apogeumatino`,`Vradino`,`Did`,`Number`,`Date`) VALUES ('$proino1','$dekatiano1','$lunch1','$apogeumatino1','$diner1','$did','$day','$date')";
    $result1= mysqli_query($conn, $sql1);
}
   

            
}

if(mysqli_num_rows($result0)>0){
    $row0=mysqli_fetch_assoc($result0);
    $did=$row0['Did'];
     $sql_day="SELECT * FROM `day` WHERE `Number` = '$day' and `Did`='$did' and `Date`='$date' ";
$res_day= mysqli_query($conn, $sql_day);
if(mysqli_num_rows($res_day)==0){
   $proino1=str_replace("\r\n","<br />",$proino);
    $dekatiano1=str_replace("\r\n","<br />",$dekatiano);
    $lunch1=str_replace("\r\n","<br />",$lunch);
    $apogeumatino1=str_replace("\r\n","<br />",$apogeumatino);
    $diner1=str_replace("\r\n","<br />",$diner);
    $sql1="INSERT INTO `day` (`Proino`,`Dekatiano`,`Mesimeriano`,`Apogeumatino`,`Vradino`,`Did`,`Number`,`Date`) VALUES ('$proino1','$dekatiano1','$lunch1','$apogeumatino1','$diner1','$did','$day','$date')";
    $result1= mysqli_query($conn, $sql1);
}
   
   
}
$_SESSION["day"]=$day;
$_SESSION["client"]=$client;
mysqli_close($conn); 
header("Location: newdiet1.php"); 

