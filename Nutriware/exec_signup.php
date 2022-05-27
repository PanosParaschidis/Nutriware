<?php
  session_cache_limiter('private, must-revalidate');
session_cache_expire(60);
header('Content-Type: text/html; charset=utf-8');
$username="panos";$password="123456";$database="nutriware";
    $conn=mysqli_connect("localhost",$username,$password,$database);
mysqli_set_charset($conn, "utf8");


       $uname = filter_input(INPUT_POST, 'uname');
    $pwd= filter_input(INPUT_POST, 'pwd');
    $pwd1= filter_input(INPUT_POST, 'pwd1');
    $fname=filter_input(INPUT_POST, 'fname');
    $lname=filter_input(INPUT_POST, 'lname');
    $email=filter_input(INPUT_POST, 'email');
  $date=date("Y-m-d");

 
  
 $pexpdate=$date;
    $find_user0="SELECT * FROM `nutritionist` WHERE `Username` = '$uname'";
    $result0= mysqli_query($conn, $find_user0);
    
    
     $find_user01="SELECT * FROM `nutritionist` WHERE `Email` = '$email'";
    $result01= mysqli_query($conn, $find_user01);
   $flag0=0;
   $flag01=0;
   $flag1=0;
   $flag2=0;
   $passFlag=0;
   if(strlen($pwd)<6 or strlen($pwd)>100){
       $passFlag=1;   
  }
       echo "<html>
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
                <li><a href='index.php'>Αρχική</a></li>
                <li  class='active'><a href='signup.html'>Εγγραφή</a></li>
                <li><a href='login.html'>Σύνδεση</a></li>
                <li><a href='comm.php'>Επικοινωνία</a></li>
                <li><a href='faq.php''>Συχνές Ερωτήσεις</a></li>
            </ul>        
          </div>
         

        </div>
      </nav>
    </div>
        <div id='bread'>
            <ol class='breadcrumb'>
            <li><a href='index.php'>Αρχική</a></li>
            <li class='active'>Εγγραφή</li>        
          </ol>
        </div>
     
             ";
        if(empty($pwd) or empty($pwd1) or empty($fname) or empty($lname) or empty($email) or empty($uname)){
   $flag1=1; 
   echo " 
             <div class='container pull-left'  >
                 <h2>Ολα τα πεδία είναι υποχρεωτικά για να εγγραφείτε, παρακαλώ συμπληρώστε τα όλα και ξαναπροσπαθήστε.</h2>
                 
              
             </div>
   ";
        }
           
   if($pwd!=$pwd1){
        $flag2=1;
       echo "
     
             
             <div class='container pull-left'  >
                 <h2>Τα πεδία password και επιβεβαίωση password δεν είναι ίδια, παρακαλώ προσπαθήστε ξανά.</h2>
                 
              
             </div>
            
        
";
   }
    if(mysqli_num_rows($result0)>0 and $flag01==0 and $flag1==0){
        $flag0=1;
         echo "
     
             
             <div class='container pull-left'  >
                 <h2>Το Username που επιλέξατε, χρησιμοποιείται ήδη. Παρακαλώ δοκιμάστε ξανά με κάποιο άλλο.</h2>
                 
              
             </div>
            
        
";
    }
    if(mysqli_num_rows($result01)>0 and $flag0==0 and $flag1==0){
        $flag01=1;
        echo "
             <div class='container pull-left'  >
                 <h2>Το Email που επιλέξατε, χρησιμοποιείται ήδη. Παρακαλώ δοκιμάστε ξανά με κάποιο άλλο.</h2>
                 
              
             </div>
            
         
";
    }
    if($passFlag==1){
             echo "
             <div class='container pull-left'  >
                 <h2>Το Password πρέπει να είναι απο 6 εώς 100 χαρακτήρες.</h2>
                 
              
             </div>
            
         
";
    }
    
    if($flag0==0 and $flag01==0 and $flag1==0 and $flag2==0 and $passFlag==0){
          $sql="INSERT INTO `nutritionist` (`Fname`,`Lname`,`Username`, `Password`, `Email`,`RegDate`,`PexpDate`) VALUES ('$fname','$lname','$uname','$pwd',  '$email','$date','$pexpdate')";
        $result= mysqli_query($conn, $sql);
    
  

        if($result and $flag0==0 and $flag01==0 and $flag1==0){
         echo "
             
             <div class='container pull-left'  >
                 <h2>Συγχαρητήρια!</h2>
                 <h2>Η εγγραφή σας ολοκληρώθηκε με επιτυχία, μπορείτε τώρα να συνδεθείτε στον λογαριασμό σας</h2>
              
             </div>
            
        
";

    }else if($flag0==0 and $flag01==0){
                echo "
             
             <div class='container pull-left'  >
                 <h2>Η εγγραφή σας δεν πραγματοποιήθηκε, Παρακαλώ Προσπαθήστε ξανά.</h2>
                 
              
             </div>
            
         
";
    }
    } 
   echo " 
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
        


