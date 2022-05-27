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
     
     $sql="SELECT * FROM `nutritionist` WHERE `Username` = '$Nuname' ";
     $res=mysqli_query($conn, $sql);
     $row= mysqli_fetch_assoc($res);
     $Nid=$row['Nid'];

   $sql1="SELECT * FROM `client` WHERE `Nid` = '$Nid'";
     $res1=mysqli_query($conn, $sql1);
     
     
     
     
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
           
                <li ><a href='profile.php'>Προφίλ</a></li>
                <li><a href='comm.php'>Επικοινωνία</a></li>
                <li><a href='faq.php''>Συχνές Ερωτήσεις</a></li>
                <li><a href='signout.php'>Αποσύνδεση</a></li>
            </ul>      
          </div>
            
            
             <ul class='nav nav-pills navbar-right' id='choicemenu'>
                 <li><a href='#' class='menuButton' onclick='openNav()'>Μενού</a> </li>
             </ul>
          
        </div>
      </nav>
     </div>
        <div id='bread' class='pull-left'>
            <ol class='breadcrumb'>
            <li><a href='profile.php'>Αρχική</a></li>
            <li><a href='profile.php'>Σύνδεση</a></li>
            <li class='active'>Οι πελάτες μου</li>        
          </ol>
        </div>
        <!---main content--->
        
  ";
     if(mysqli_num_rows($res1)>0){
     
        echo " <div class='container' >
            <br><br>
            <h2>Οι πελάτες μου</h2> 
            <div id='table1' > 
            <table >
        <tr>
           
                <th>Όνομα &emsp;&emsp;&emsp;</th>
                <th>Επίθετο &emsp;&emsp;&emsp;</th>
                <th>E-mail &emsp;&emsp;&emsp;</th>
                <th>Username &emsp;&emsp;&emsp;</th>
                <th>Τηλέφωνο &emsp;&emsp;&emsp;</th>
                <th>Επιλογές &emsp;&emsp;&emsp; </th>
        </tr>
         
                "; 
         while($row1= mysqli_fetch_assoc($res1)){ 
            echo "  <tr>
                <form class='form-horizontal' method='post' action='details.php'>
                <td> 
                 <input type='text' class='form-control' id='fname' name='fname' value='".$row1["Fname"]."' readonly style='background: white'>
             </td>
              <td> 
               <input type='text' class='form-control' id='lname' name='lname' value='".$row1["Lname"]."' readonly style='background: white'>
             </td>
              <td> 
                 <input type='email' class='form-control' id='email' name='email' value='".$row1["Email"]."' readonly style='background: white'>
             </td>
              <td> 
                <input type='text' class='form-control' id='uname' name='uname' value='".$row1["Username"]."' readonly style='background: white'>
             </td>
                 <td> 
                <input type='text' class='form-control' id='tel' name='tel' value='".$row1["telephone"]."' readonly style='background: white'>
             </td>
              <td> 
                 <button type='submit' class='btn btn-default'>Περισσότερα</button>
             </td>
             </form>
              </tr>" ;
                }
        echo " </table>
           </div>
           </div>
       "
        ;
      
      
      }else{
            echo " <div class='container' >
                <br><br><br>
            <h2>Δεν βρέθηκαν πελάτες, επιλέξτε Νέος Πελάτης απο το Μενού για να ξεκινήσετε.</h2> 
            </div>
";
      }

     echo " 
        
   <!---end main--->
                 <div id='mySidenav' class='sidenav'>
                <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
                <a href='clients.php'>Οι πελάτες μου</a>
                <a href='newclient.html'>Νέος Πελάτης</a>  <hr>
                <a href='newdiet.php'>Σχεδιασμός Διαιτολογίου</a>
                <a href='equals.html'>Υπολογισμός Ισοδυνάμων</a>
                 <a href='tables.php'>Πίνακες Σύστασης Τροφίμων</a>  <hr>
                  <a href='appointment.php'>Νέο Ραντεβού</a>
                  <a href='calendar.php'>Ημερολόγιο</a>
              </div>
 
       
            <div id='mySidenav1' class='sidenav'>
  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
  <a href='profile.php'>Προφίλ</a> <hr>
  <a href='clients.php'>Οι πελάτες μου</a>
  <a href='newclient.html'>Νέος Πελάτης</a>  <hr>
  <a href='newdiet.php'>Σχεδιασμός Διαιτολογίου</a>
  <a href='equals.html'>Υπολογισμός Ισοδυνάμων</a>
   <a href='tables.php'>Πίνακες Σύστασης Τροφίμων</a>  <hr>
    <a href='appointment.php'>Νέο Ραντεβού</a>
    <a href='calendar.php'>Ημερολόγιο</a> <hr>
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