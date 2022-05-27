<?php
  session_cache_limiter('private, must-revalidate');
session_cache_expire(60);
header('Content-Type: text/html; charset=utf-8');
    $username="panos";$password="123456";$database="nutriware";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    mysqli_set_charset($conn, "utf8");
    session_start();
    $uname=$_SESSION['uname'];
    $pwd=$_SESSION['pwd'];
 $find_user1="SELECT * FROM `client` WHERE `Username` = '$uname' AND `Password` = '$pwd'  ";
      $result1= mysqli_query($conn, $find_user1);
      
$row1= mysqli_fetch_assoc($result1);
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
                    <li class='active'><a href='client_diets.php'>Διαιτολόγιο</a></li>
                <li ><a href='client_profile.php'>Προφίλ</a></li>
       
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
     if(mysqli_num_rows($res2)==0){
    echo "<br><br><h2>Δεν βρέθηκαν διαιτολόγια για τον συγκεκριμένο πελάτη</h2>";
}
else{
     echo "<br><br><h2>Επιλέξτε Ημερομηνία</h2>";
     echo "<form class='form-horizontal' method='post' action='history_client.php'>
         <div class='col-sm-4'>
                       <select class='form-control' id='client' name='client'>
                           <option value=''> </option>";
     
    while($row2=mysqli_fetch_assoc($res2)){
          echo " 
                        <option  value='".$row2['Date']."'>". date('d-m-Y', strtotime($row2['Date']))."</option>
                      
                    ";
    }
    echo "  </select>
                  </div>
                </div>";
             echo " <button type='submit' class='btn btn-default'>Προβολή</button>
                    </form>" ;

}
   
    
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