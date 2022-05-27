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
   
    
      echo " <html>
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
        
                <li><a href='profile.php'>Προφίλ</a></li>
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
            <li class='active'>Προσθήκη Βιοχημικών Εξετάσεων</li>        
          </ol>
        </div>
        
        <div class='container'>
            <form class='form-horizontal' method='post' action='exec_chemwork.php'>
                <br><br>
                  <h2>Προσθήκη Βιοχημικών Εξετάσεων</h2>
            
               
                  <div class='form-group'>
                  <label class='control-label col-sm-3' for='chol'>Χοληστερόλη Ολική (mg/dL):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='chol' name='chol' placeholder=''>
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-3' for='hdl'>HDL Χοληστερόλη (mg/dL):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='hdl' name='hdl' placeholder=''>
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-3' for='ldl'>LDL Χοληστερόλη (mg/dL):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='ldl' name='ldl' placeholder=''>
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-3' for='ferum'>Σίδηρος Ορού (μg/dL):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='ferum' name='ferum' placeholder=''>
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-3' for='glucose'>Γλυκόζη (mg/dL):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='glucose' name='glucose' placeholder=''>
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-3' for='urine'>Ουρία (mg/dL):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='urine' name='urine' placeholder=''>
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-3' for='creatine'>Κρεατινίνη Ορού (mg/dL):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='creatine' name='creatine' placeholder=''>
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-3' for='kalio'>Κάλιο (mEq/L):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='kalio' name='kalio' placeholder=''>
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-3' for='natrio'>Νάτριο (mEq/L):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='natrio' name='natrio' placeholder=''>
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-3' for='ouriko'>Ουρικό Οξύ (mg/dL):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='ouriko' name='ouriko' placeholder=''>
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-3' for='trigl'>Τριγλυκερίδια (mg/dL):</label>
                  <div class='col-sm-4'>
                      <input type='text'  class='form-control' id='trigl' name='trigl' placeholder=''>
                  </div>
                </div>
               <div class='form-group'>
                  <div class='col-sm-offset-2 col-sm-3'>
                    <button type='submit' class='btn btn-default'>Αποθήκευση εξετάσεων</button>
                  </div>
                </div>
              </form>
            
	  </div>
                   
             
  
        
        
        
        
 <!--hidden sidebar -->
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
