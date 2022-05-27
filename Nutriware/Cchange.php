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
     $Cid=$row['Cid'];
   
      $sql1="SELECT * FROM `general` WHERE `Cid` = '$Cid'";
     $res1=mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_assoc($res1);
    
      $allergies = str_replace("<br />" ,"\n" ,$row1['Allergies'] );
        $astheneies = str_replace("<br />" ,"\n" ,$row1['Astheneies'] );
        $goals=str_replace("<br />" ,"\n" ,$row1['Stoxoi'] );
        $drugs=str_replace("<br />" ,"\n" ,$row1['Drugs'] );
        $info=str_replace("<br />" ,"\n" ,$row1['info'] );
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
             <li><a href='clients.php'>Οι πελάτες μου</a></li>
            <li ><a href='clients.php'>Περισσότερα</a></li>  
            <li class='active'>Αλλαγή Πληροφοριών Πελάτη</li> 
          </ol>
        </div>
        <!---main content--->
         
       <div class='container' >
            <br><br>
            <h2>Πληροφορίες Πελάτη</h2> 
            
            <form class='form-horizontal' method='post' action='save_client.php'>
            <div id='table1' > 
            
            <table >
            
        <tr>
           
             <th>Όνομα &emsp;&emsp;&emsp;</th>
             <td> 
                 <input type='text' class='form-control' id='fname' name='fname' value='".$row['Fname']."'  style='background: white'>
             </td>
             <th>&emsp;Βάρος &emsp;&emsp;&emsp;</th>
             <td> 
                 <input type='text' class='form-control' id='weight' name='weight' value='".$row1['Varos']."'  style='background: white'>
             </td>
             <th>&emsp;Αλλεργίες &emsp;&emsp;&emsp;</th>
                <td> 
                <textarea class='form-control' id='aller' name='aller'   style='background: white'>".$allergies."</textarea>
            </td>
             
        </tr>
        <tr>
             <th>Επίθετο &emsp;&emsp;&emsp;</th>
             <td> 
               <input type='text' class='form-control' id='lname' name='lname' value='".$row['Lname']."'  style='background: white'>
             </td>
             <th>&emsp;BMI &emsp;&emsp;&emsp;</th>
             <td> 
               <input type='text' class='form-control' id='bmi' name='bmi' value='".$row1['BMI']."'  style='background: white'>
             </td>
             <th>&emsp;Ασθένειες &emsp;&emsp;&emsp;</th>
             <td> 
                <textarea class='form-control' id='disease' name='disease'  style='background: white'>".$astheneies."</textarea>
             </td>
            
         </tr>
        <tr>
             <th>E-mail &emsp;&emsp;&emsp;</th>
             <td> 
                 <input type='email' class='form-control' id='email' name='email' value='".$row['Email']."'  style='background: white'>
             </td>
             <th>&emsp;Λίπος &emsp;&emsp;&emsp;</th>
             <td> 
                 <input type='text' class='form-control' id='fat' name='fat' value='".$row1['Lipos']."'  style='background: white'>
             </td>
             <th>&emsp;Στόχοι &emsp;&emsp;&emsp;</th>
                      <td> 
                 <textarea class='form-control' id='goals' name='goals'   style='background: white'>".$goals."</textarea>
                </td>
              
                     
             </tr>
        <tr>
             <th>Username &emsp;&emsp;&emsp;</th>
             <td> 
                <input type='text' class='form-control' id='uname' name='uname' value='".$row['Username']."'  style='background: white'>
             </td>   
             <th>&emsp;Ηλικία &emsp;&emsp;&emsp;</th>
             <td> 
                 <input type='text' class='form-control' id='age' name='age' value='".$row1['Age']."'  style='background: white'>
             </td>
              <th>&emsp;Φάρμακα &emsp;&emsp;&emsp;</th>
             <td> 
                 <textarea class='form-control' id='drugs' name='drugs'  style='background: white'>".$drugs."</textarea>
             </td>
             </tr>
        <tr>
             <th>Τηλέφωνο &emsp;&emsp;&emsp;</th>
                <td> 
                <input type='text' class='form-control' id='tel' name='tel' value='".$row['telephone']."'  style='background: white'>
             </td>
              <th>&emsp;Ύψος &emsp;&emsp;&emsp;</th>
             <td> 
                 <input type='text' class='form-control' id='height' name='height' value='".$row1['Height']."'  style='background: white'>
             </td>
            
             
             </tr>
        
               
        
       
         
                
    </table>
  
 <h3> Επιπλέον πληροφορίες:</h3>
      
               <textarea  class='form-control' id='info' name='info'  style='background: white; width:100%; height:20%;'>$info</textarea>
        
           </div>
           <br>
                      <button type='submit' class='btn btn-default'>Αλλαγή Στοιχείων</button>
                
                </form>
           <br>
        
        </div>
       "
        ;


    
    
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
</html>    
";
    
 mysqli_close($conn); 
    
    
    
    
    
    
    
    
    
    