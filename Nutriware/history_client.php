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
         $Cuname=$_SESSION["uname"];
        
        $sdate=filter_input(INPUT_POST, 'client');
            $sql1="SELECT * FROM `client` WHERE `Username` = '$Cuname'";
    $res1=mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_assoc($res1);
    $cid=$row1['Cid'];
    $nid=$row1['Nid'];
     $sql2="SELECT * FROM `diet` WHERE `Nid` = '$nid' and `Cid`='$cid' ";
    $res2= mysqli_query($conn, $sql2);
  
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
             
                <li ><a href='client_profile.php'>Προφίλ</a></li>
                <li class='active'><a href='client_diets.php'>Διαιτολόγιο</a></li>                
                <li><a href='comm.php'>Επικοινωνία</a></li>
                <li><a href='faq.php''>Συχνές Ερωτήσεις</a></li>
                <li><a href='signout.php'>Αποσύνδεση</a></li>
            </ul>      
          </div>
            
            
         
      <ul class='nav nav-pills navbar-left' id='choicemenu1'>
                 <li><a href='#' class='menuButton' onclick='openNav()'>Μενού</a> </li>
             </ul>   
          
        </div>
      </nav>
     </div>
        <div id='bread' class='pull-left'>
            <ol class='breadcrumb'>
            <li><a href='client_profile.php'>Αρχική</a></li>
            <li><a href='client_profile.php'>Σύνδεση</a></li>
            <li class='active'>Ιστορικό Διαιτολογίων</li>        
          </ol>
        </div>
        <!---main content--->
      
";
echo "     <div class='container'>"
     . "<br><br><h2>".date('d-m-Y', strtotime($sdate))."</2>
         ";

     $sql0="SELECT * FROM `diet` WHERE `Nid` = '$nid' and `Cid`='$cid' and `Date`='$sdate'";
$result01= mysqli_query($conn, $sql0);
 $row01=mysqli_fetch_assoc($result01);
  $did=$row01['Did'];
  
   $sql_day="SELECT * FROM `day` WHERE `Number` = 1 and `Did`='$did' and `Date`='$sdate'";
$res_day= mysqli_query($conn, $sql_day);
$row3=mysqli_fetch_assoc($res_day);
   echo "<h3>1η Ημέρα: </h3><br>
       <h4> -Πρωινό:<br> ".$row3['Proino']." </h4> <br>
       <h4>  -Δεκατιανό:<br> ".$row3['Dekatiano']." </h4><br> 
        <h4> -Μεσημεριανό:<br> ".$row3['Mesimeriano']." </h4><br>
       <h4>  -Απογευματινό:<br> ".$row3['Apogeumatino']." </h4><br>
       <h4>  -Βραδινό:<br>  ".$row3['Vradino']." </h4><br>";

    $sql_day2="SELECT * FROM `day` WHERE `Number` = 2 and `Did`='$did' and `Date`='$sdate'";
$res_day2= mysqli_query($conn, $sql_day2);
$row32=mysqli_fetch_assoc($res_day2);
   echo "<h3>2η Ημέρα: </h3><br>
       <h4> -Πρωινό: <br>".$row32['Proino']." </h4> <br>
       <h4>  -Δεκατιανό:<br> ".$row32['Dekatiano']." </h4><br> 
        <h4> -Μεσημεριανό: <br>".$row32['Mesimeriano']." </h4><br>
       <h4>  -Απογευματινό: <br>".$row32['Apogeumatino']." </h4><br>
       <h4>  -Βραδινό:<br> ".$row32['Vradino']." </h4><br>";
   
    $sql_day3="SELECT * FROM `day` WHERE `Number` = 3 and `Did`='$did' and `Date`='$sdate' ";
$res_day3= mysqli_query($conn, $sql_day3);
$row33=mysqli_fetch_assoc($res_day3);
   echo "<h3>3η Ημέρα: </h3><br>
       <h4> -Πρωινό:<br> ".$row33['Proino']." </h4> <br>
       <h4>  -Δεκατιανό:<br> ".$row33['Dekatiano']." </h4><br> 
        <h4> -Μεσημεριανό:<br> ".$row33['Mesimeriano']." </h4><br>
       <h4>  -Απογευματινό:<br> ".$row33['Apogeumatino']." </h4><br>
       <h4>  -Βραδινό:<br> ".$row33['Vradino']." </h4><br>";
   
    $sql_day4="SELECT * FROM `day` WHERE `Number` = 4 and `Did`='$did' and `Date`='$sdate' ";
$res_day4= mysqli_query($conn, $sql_day4);
$row34=mysqli_fetch_assoc($res_day4);
   echo "<h3>4η Ημέρα: </h3><br>
       <h4> -Πρωινό: <br>".$row34['Proino']." </h4> <br>
       <h4>  -Δεκατιανό: <br>".$row34['Dekatiano']." </h4><br> 
        <h4> -Μεσημεριανό:<br> ".$row34['Mesimeriano']." </h4><br>
       <h4>  -Απογευματινό: <br>".$row34['Apogeumatino']." </h4><br>
       <h4>  -Βραδινό: <br>".$row34['Vradino']." </h4><br>";
   
    $sql_day5="SELECT * FROM `day` WHERE `Number` = 5 and `Did`='$did' and `Date`='$sdate' ";
$res_day5= mysqli_query($conn, $sql_day5);
$row35=mysqli_fetch_assoc($res_day5);
   echo "<h3>5η Ημέρα: </h3><br>
       <h4> -Πρωινό: <br>".$row35['Proino']." </h4> <br>
       <h4>  -Δεκατιανό: <br>".$row35['Dekatiano']." </h4><br> 
        <h4> -Μεσημεριανό: <br>".$row35['Mesimeriano']." </h4><br>
       <h4>  -Απογευματινό: <br>".$row35['Apogeumatino']." </h4><br>
       <h4>  -Βραδινό:<br> ".$row35['Vradino']." </h4><br>";
   
    $sql_day6="SELECT * FROM `day` WHERE `Number` = 6 and `Did`='$did' and `Date`='$sdate'";
$res_day6= mysqli_query($conn, $sql_day6);
$row36=mysqli_fetch_assoc($res_day6);
   echo "<h3>6η Ημέρα: </h3><br>
       <h4> -Πρωινό: <br>".$row36['Proino']." </h4> <br>
       <h4>  -Δεκατιανό: <br>".$row36['Dekatiano']." </h4><br> 
        <h4> -Μεσημεριανό: <br>".$row36['Mesimeriano']." </h4><br>
       <h4>  -Απογευματινό: <br>".$row36['Apogeumatino']." </h4><br>
       <h4>  -Βραδινό: <br>".$row36['Vradino']." </h4><br>";
   
    $sql_day7="SELECT * FROM `day` WHERE `Number` = 7 and `Did`='$did' and `Date`='$sdate' ";
$res_day7= mysqli_query($conn, $sql_day7);
$row37=mysqli_fetch_assoc($res_day7);
   echo "<h3>7η Ημέρα: </h3><br>
       <h4> -Πρωινό:<br> ".$row37['Proino']." </h4> <br>
       <h4>  -Δεκατιανό:<br> ".$row37['Dekatiano']." </h4><br> 
        <h4> -Μεσημεριανό: <br>".$row37['Mesimeriano']." </h4><br>
       <h4>  -Απογευματινό:<br> ".$row37['Apogeumatino']." </h4><br>
       <h4>  -Βραδινό: <br>".$row37['Vradino']." </h4><br>";

   echo " <form class='form-horizontal' action='save_comments.php' method='post'>
        <textarea  class='form-control' id='comments' name='comments'  ></textarea>
        <input type='hidden' name='did' value='".$did."'>
        <button type='submit' class='btn btn-default'>Αποθήκευση Σχολίων</button>
        </form>
        
        </div>" ;
    echo " 
        
   <!---end main--->
<div id='mySidenav' class='sidenav'>
                <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
          
              </div>
 
       
            <div id='mySidenav1' class='sidenav'>
  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
  <a href='client_profile.php'>Προφίλ</a>
  <a href='client_diets.php'>Διαιτολόγιο</a>
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
    </html>";
        mysqli_close($conn); 