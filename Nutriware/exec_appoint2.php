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
      $find_user="SELECT * FROM `nutritionist` WHERE `Username` = '$Nuname' ";
      $result0= mysqli_query($conn, $find_user);
      $row0= mysqli_fetch_assoc($result0);
      $nid=$row0['Nid'];
      
      $client=filter_input(INPUT_POST, 'client');
      $day=filter_input(INPUT_POST, 'day');
      $hour=filter_input(INPUT_POST, 'hour');
      $comm=filter_input(INPUT_POST, 'comments');
      $sql1="SELECT * FROM `client` WHERE `Username` = '$client'";
      $res1=mysqli_query($conn, $sql1);
      $row1= mysqli_fetch_assoc($res1);
      $cid=$row1['Cid'];
      $name=$row1['Fname']. " " . $row1['Lname'];
      
      
     $sql2="INSERT INTO `events` (`Nid`,`Cid`,`Date`,`Comments`,`Name`,`Time`) VALUES ('$nid','$cid','$day','$comm','$name','$hour')";
    $res2= mysqli_query($conn, $sql2);
     header("Location: calendar.php"); 
     
         mysqli_close($conn); 