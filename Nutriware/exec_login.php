<?php
session_cache_limiter('private, must-revalidate');
session_cache_expire(60);

header('Content-Type: text/html; charset=utf-8');
    $username="panos";$password="123456";$database="nutriware";
    $conn=mysqli_connect("localhost",$username,$password,$database);
    mysqli_set_charset($conn, "utf8");
    session_start();
    $uname = filter_input(INPUT_POST, 'uname');
    $pwd= filter_input(INPUT_POST, 'pwd');


     $find_user="SELECT * FROM `nutritionist` WHERE `Username` = '$uname' AND `Password` = '$pwd'  ";
      $result= mysqli_query($conn, $find_user);
      
         $find_user1="SELECT * FROM `client` WHERE `Username` = '$uname' AND `Password` = '$pwd'  ";
      $result1= mysqli_query($conn, $find_user1);
      
       $_SESSION["uname"]=$uname;
       $_SESSION["pwd"]=$pwd;
      if(mysqli_num_rows($result)>0){
     while($row= mysqli_fetch_assoc($result)){
        $date=$row["RegDate"];
        $date2=$row["PexpDate"];
        $today=date("Y-m-d");
        $date1= date("Y-m-d",strtotime("$date + 14 days"));
         if($date1<=$today and $date2<=$today ){
             echo "  <html>
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
       
                <li class='active'><a href='profile.php'>Προφίλ</a></li>
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
            <li class='active'>Προφίλ</li>        
          </ol>
        </div>
        <!---main content--->
        
        <div class='container-fluid' id='cont2'>
       <br><br>
                
             <h2>Η συνδρομή σας έληξε, για να συνεχίσετε να χρησιμοποιείτε το Nutriware μεταβείτε στην σελίδα πληρωμής 
             για να ενεργοποιήσετε την ετήσια συνδρομή σας.
            </h2>
            
             <button id='pb1' class='btn btn-default '  onclick=\"window.location.href='payment.php'\">Πληρωμή</button>
             
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
     
         }else{
              $_SESSION['status']="Active";
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
       
                <li class='active'><a href='profile.php'>Προφίλ</a></li>
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
            <li class='active'>Προφίλ</li>        
          </ol>
        </div>
        <!---main content--->
        
        <div class='container-fluid' id='cont2'>
       <br><br>
                
             <h2> Στοιχεία Λογαριασμού </h2>";
        echo "
      
            <form class='form-horizontal' method='post' action='Nchange.php'>
                 
                 <div class='form-group'>
                  <label class='control-label col-sm-2' for='fname'>Ονομα:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='fname' name='fname' value='".$row["Fname"]."' readonly style='background: white'>
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-2' for='lname'>Επίθετο:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='lname' name='lname' value='".$row["Lname"]."' readonly style='background: white'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='control-label col-sm-2' for='uname'>Username:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='uname' name='uname' value='".$row["Username"]."' readonly style='background: white'>
                  </div>
                </div>
          
                    <input type='hidden' class='form-control' id='pwd' name='pwd' value='".$row["Password"]."' readonly style='background: white'>
              
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='email'>E-mail:</label>
                  <div class='col-sm-4'>
                    <input type='email' class='form-control' id='email' name='email' value='".$row["Email"]."' readonly style='background: white'>
                  </div>
                </div>";
        if($date==$date2){
            echo " 
               <div class='form-group'>
                  <label class='control-label col-sm-2' for='expdate'>Ημ/νια Λήξης Συνδρομής:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='expdate' name='expdate' value='".date('d-m-Y', strtotime($date1))."' readonly style='background: white'>
                  </div>
                </div>";
        }else{
               echo " 
               <div class='form-group'>
                  <label class='control-label col-sm-2' for='expdate'>Ημ/νια Λήξης Συνδρομής:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='expdate' name='expdate' value='".date('d-m-Y', strtotime($date2))."' readonly style='background: white'>
                  </div>
                </div>";
        }
        echo  " 
                   <div class='form-group'>
                  <div class='col-sm-offset-2 col-sm-2'>
                      <button type='submit' class='btn btn-default'>Αλλαγή Στοιχείων</button>
                  </div>
                </div>
                </form>
                           <div class='col-sm-offset-2 col-sm-2'>
                 <button class='btn btn-default' id='delete' onclick='delete_nutri();'>Διαγραφή Λογαριασμού</button>
             </div>
        </div>
        <script>
        function delete_nutri(){
    window.location=\"confirm.php\";
}
</script>
           
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
     }
     }
}else if(mysqli_num_rows($result1)>0){
    $row1= mysqli_fetch_assoc($result1);
        $_SESSION['status']="Active1";
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
          
       
             <div class='navbar-collapse collapse' >
                  <ul class='nav nav-pills navbar-right' id='topmenu'>
 
                <li><a href='client_diets.php'>Διαιτολόγιο</a></li>
                <li class='active'><a href='client_profile.php'>Προφίλ</a></li>
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
            <li class='active'>Προφίλ</li>        
          </ol>
        </div>
        <!---main content--->
        
        <div class='container-fluid' id='cont2'>
       <br><br>
                
             <h2> Στοιχεία Λογαριασμού </h2>";
        echo "
      
            <form class='form-horizontal' method='post' action='client_change.php'>
                 
                 <div class='form-group'>
                  <label class='control-label col-sm-2' for='fname'>Ονομα:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='fname' name='fname' value='".$row1["Fname"]."' readonly style='background: white'>
                  </div>
                </div>
                 <div class='form-group'>
                  <label class='control-label col-sm-2' for='lname'>Επίθετο:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='lname' name='lname' value='".$row1["Lname"]."' readonly style='background: white'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='control-label col-sm-2' for='uname'>Username:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='uname' name='uname' value='".$row1["Username"]."' readonly style='background: white'>
                  </div>
                </div>
            
                    <input type='hidden' class='form-control' id='pwd' name='pwd' value='".$row1["Password"]."' readonly style='background: white'>
            
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='email'>E-mail:</label>
                  <div class='col-sm-4'>
                    <input type='email' class='form-control' id='email' name='email' value='".$row1["Email"]."' readonly style='background: white'>
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='tel'>Τηλέφωνο:</label>
                  <div class='col-sm-4'>
                    <input type='text' class='form-control' id='tel' name='tel' value='".$row1["telephone"]."' readonly style='background: white'>
                  </div>
                </div>
                   <div class='form-group'>
                  <div class='col-sm-offset-2 col-sm-2'>
                      <button type='submit' class='btn btn-default'>Αλλαγή Στοιχείων</button>
                  </div>
                </div>
                </form>
            
           
        </div>
        
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
	 
    
    </body>";
        
     
}
else{
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
                <li><a href='signup.html'>Εγγραφή</a></li>
                <li class='active'><a href='login.html'>Σύνδεση</a></li>
                <li><a href='comm.php'>Επικοινωνία</a></li>
                <li><a href='faq.php'>Συχνές Ερωτήσεις</a></li>
            </ul>        
          </div>
         

        </div>
      </nav>
    </div>
        <div id='bread'>
            <ol class='breadcrumb'>
            <li><a href='index.php'>Αρχική</a></li>
            <li class='active'>Σύνδεση</li>        
          </ol>
        </div>
     
        <!---main content--->
        
        <div class='container-fluid' id='cont2'>
       <br><br>
                
             <h2>Ο κωδικός ή το όνομα χρήστη που εισάγατε είναι λάθος, παρακαλώ προσπαθήστε ξανά, 
             ή πραγματοποιήστε εγγραφή νέου χρήστη.
            </h2>
            
             
             
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
}
          
  

    mysqli_close($conn); 
          