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
     
     $uname=$_SESSION['client'];
     
     $sql="SELECT * FROM `client` WHERE `Username` = '$uname'";
     $res=mysqli_query($conn, $sql);
     $row= mysqli_fetch_assoc($res);
     $cid=$row['Cid'];
     $fname=$row['Fname'];
     $lname=$row['Lname'];
     $sql1="DELETE FROM `general` WHERE `general`.`Cid`='$cid' ";
     $res1=mysqli_query($conn, $sql1);
     
     $sql2="DELETE FROM `geniki_aimatos` WHERE `geniki_aimatos`.`Cid`='$cid' ";
     $res2=mysqli_query($conn, $sql2);
     
     $sql3="DELETE FROM `viochimikos_elegxos` WHERE `viochimikos_elegxos`.`Cid`='$cid' ";
     $res3=mysqli_query($conn, $sql3);
     
     $sql4="DELETE FROM `tests` WHERE `tests`.`Cid`='$cid' ";
     $res4=mysqli_query($conn, $sql4);
     
     $sql5="DELETE FROM `events` WHERE `events`.`Cid`='$cid' ";
     $res5=mysqli_query($conn, $sql5);
      
     
        $sql12="DELETE FROM `frequency` WHERE `frequency`.`Cid` = '$cid'";
     $res12=mysqli_query($conn, $sql12);
     
      $sql6="SELECT * FROM `diet` WHERE `Cid` = '$cid'";
     $res6=mysqli_query($conn, $sql6);
     if(mysqli_num_rows($res6)>0){
         while($row6= mysqli_fetch_assoc($res6)){
             $did=$row6['Did'];
              $sql7="DELETE FROM `day` WHERE `day`.`Did`='$did' ";
              $res7=mysqli_query($conn, $sql7);
         }
     }
     
     $sql8="DELETE FROM `diet` WHERE `diet`.`Cid`='$cid' ";
     $res8=mysqli_query($conn, $sql8);
     
     $sql9="DELETE FROM `client` WHERE `client`.`Cid`='$cid' ";
     $res9=mysqli_query($conn, $sql9);
     
     header("Location: clients.php"); 
         mysqli_close($conn); 