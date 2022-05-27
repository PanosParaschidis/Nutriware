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
    // Prepare and execute query
  $sql="SELECT * FROM `events` WHERE `Nid` = '$nid' ";
      $result= mysqli_query($conn, $sql);
    
      
        
            $event_array = array();
          
            while ($record =mysqli_fetch_assoc($result)) {
                if(!empty($record['Comments'] )){
                    $title= $record['Time']. " " . $record['Name'] . ": ". $record['Comments'];
                }else{
                    $title= $record['Time']. " " . $record['Name'];
                }
                $event_array[] = array(
                    'id' => $record['Eid'],
                    'title' => $title,
                    'start' => $record['Date'],
                    
                );
            }
      echo json_encode($event_array);
      
          mysqli_close($conn); 