<?php
    session_start();
    $username="panos";$password="123456";$database="nutriware";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    mysqli_set_charset($conn, "utf8");
    $uname= $_SESSION["uname"];
    $pwd=$_SESSION["pwd"];
  
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
       
             
                <li><a href='comm.php'>Επικοινωνία</a></li>
                <li><a href='faq.php''>Συχνές Ερωτήσεις</a></li>
                <li><a href='signout.php'>Αποσύνδεση</a></li>
            </ul>      
          </div>
            
          
          
        </div>
      </nav>
     </div>
        <div id='bread' class='pull-left'>
            <ol class='breadcrumb'>
            <li><a href='index.php'>Αρχική</a></li>
            <li><a href='login.html'>Σύνδεση</a></li>
            <li  class='active'>Πληρωμή</li>
                   
          </ol>
        </div>
        <!---main content--->
        
        <div class='container-fluid' id='cont2'>
       <br><br>
                
             <h2> Πληρωμή Συνδρομής </h2>";
        echo " <form class='form-horizontal' action='redirect_pay.php' method='post'>
                 
                     <div class='form-group'>
                  <label class='control-label col-sm-2' for='uname'>Username:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='uname' name='uname' placeholder='Username' >
                  </div>
                </div>
                     <div class='form-group'>
                  <label class='control-label col-sm-2' for='email'>Email:</label>
                  <div class='col-sm-4'>
                    <input type='email' class='form-control' id='email' name='email' placeholder='Email' >
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-2' for='credit'>Αριθμός Κάρτας:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='credit' name='credit' placeholder='xxxx-xxxx-xxxx-xxxx'>
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-2' for='name'>Ονομα Κατόχου:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='name' name='name' placeholder='Ονομα Επίθετο' >
                  </div>
                </div>
                <div class='form-group'>
                  <label class='control-label col-sm-2' for='cvc'>CVC:</label>
                  <div class='col-sm-1'>
                    <input type='text' class='form-control' id='cvc' name='cvc' placeholder='CVC' >
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='date'>Ημερομηνία Λήξης:</label>
                  <div class='col-sm-2'>
                    <input type='month' class='form-control' id='date' name='date'>
                  </div>
                </div>
                
                 <div class='form-group'>
                  <div class='col-sm-offset-2 col-sm-2'>
                    <button type='submit' class='btn btn-default'>Πληρωμή</button>
                  </div>
                </div>
               </form>
                    <div class='col-sm-offset-2 col-sm-2'>
                 <button class='btn btn-default' id='delete' onclick='#'>Διαγραφή Λογαριασμού</button>
             </div>
                  
             
        </div>
        

        
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