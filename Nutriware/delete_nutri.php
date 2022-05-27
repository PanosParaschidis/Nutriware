<?php
    session_start();
  $username="panos";$password="123456";$database="nutriware";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    mysqli_set_charset($conn, "utf8");
     if(!isset($_SESSION['status'])){
          header("Location: login.html"); 
     }
      
    
    
$uname= $_SESSION["uname"];
 $find_user="SELECT * FROM `nutritionist` WHERE `Username` = '$uname'  ";
      $result= mysqli_query($conn, $find_user);
      $row0= mysqli_fetch_assoc($result);
      $nid=$row0['Nid'];
      
      $sql="SELECT * FROM `client` WHERE `Nid` = '$nid'";
     $res=mysqli_query($conn, $sql);
     
     while($row= mysqli_fetch_assoc($res)){
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
     
      $sql6="SELECT * FROM `diet` WHERE `Cid` = '$cid'";
     $res6=mysqli_query($conn, $sql6);
     
        $sql12="DELETE FROM `frequency` WHERE `frequency`.`Cid` = '$cid'";
     $res12=mysqli_query($conn, $sql12);
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
     }
       $sql10="DELETE FROM `events` WHERE `events`.`Nid`='$nid' ";
     $res10=mysqli_query($conn, $sql10);
     
      $sql11="DELETE FROM `nutritionist` WHERE `nutritionist`.`Nid`='$nid' ";
     $res11=mysqli_query($conn, $sql11);
     
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
           <a id='toggleb' class='btn btn-default' data-toggle='collapse' data-target='.menu'>
                <span class='glyphicon glyphicon-th-list' aria-hidden='true'></span>
            </a>
             <div class='menu navbar-collapse collapse' >
                 <ul class='nav nav-pills navbar-right' id='topmenu1'>
                <li ><a href='index.php'>Αρχική</a></li>
                <li><a href='signup.html'>Εγγραφή</a></li>
                <li ><a href='login.html'>Σύνδεση</a></li>
                <li><a href='comm.php'>Επικοινωνία</a></li>
                <li><a href='faq.php''>Συχνές Ερωτήσεις</a></li>
            </ul>        
          </div>
        </div>
      </nav>
    </div>
        
         <div class='container-fluid' id='cont2'>
   
 
       
           <h2>Ο λογαριασμός, καθώς και οι λογαριασμοί των πελατών σας, έχουν διαγραφεί. <br>
           Ευχαριστούμε που χρησιμοποιήσατε το Nutriware και ελπίζουμε να σας ξαναδούμε!</h2>
         
     
	  </div> 
    
        
         
    <!-- footer-->
    <!-- footer-->
        <div class='navbar-collapse collapse' >
  <footer class='footer' id='footer'>
      
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
</html>

     ";
     
         mysqli_close($conn); 