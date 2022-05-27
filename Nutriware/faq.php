<?php
  session_cache_limiter('private, must-revalidate');
session_cache_expire(60);
header('Content-Type: text/html; charset=utf-8');

        session_start();
       if(!isset($_SESSION['status'])){
         $flag=0;
        }
         else{
             $flag=1;
         }
         
         if($flag==0){
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
                <li><a href='index.php'>Αρχική</a></li>
                <li><a href='signup.html'>Εγγραφή</a></li>
                <li><a href='login.html'>Σύνδεση</a></li>
                <li><a href='comm.php'>Επικοινωνία</a></li>
                <li class='active'><a href='faq.php''>Συχνές Ερωτήσεις</a></li>
            </ul>        
          </div>
         

        </div>
      </nav>
    </div>
         <div id='bread' >
            <ol class='breadcrumb'>
            <li><a href='index.php'>Αρχική</a></li>
            <li class='active'>Συχνές Ερωτήσεις</li>        
          </ol>
        </div>
         
   
  <style>
button.accordion {
    background-color: #F4F4F4;
    color: #373737;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #C0B283;
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>

   <div class='container' >
<br><br>
<h2>Συχνές Ερωτήσεις</h2>
<button class='accordion'>Τι είναι το Nutriware</button>
<div class='panel'>
  <p>Το Nutriware αποτελεί το πρώτο Ελληνικό σύστημα διαχείρησης πελατών για διαιτολόγους/διατροφολόγους. Το μόνο που χρείαζεται για να λειτουργήσει
  είναι μια συσκυή με πρόσβαση στο ίντερνετ, μιας και έχει σχεδιαστεί με τέτοιο τρόπο που μπορεί να χρησιμοποιηθεί τόσο απο υπολογιστή
  όσο και απο ταμπλέτες και κινητά.</p>
</div>

<button class='accordion'>Σε ποιούς απευθύνεται το Nutriware</button>
<div class='panel'>
  <p>Το Nutriware έχει σχεδιαστεί αποκλειστικά για χρήση απο Έλληνες διατροφολόγους/διαιτολόγους, αλλά και τους πελάτες τους, με γνώμονα
  την ευχρηστία και την λειτουργικότητα.</p>
</div>

<button class='accordion'>Τι λειτουργίες παρέχει το Nutriware</button>
<div class='panel'>
  <p>Οι λειτουργίες που παρέχονται σχεδιάστηκαν με βάση τις συμβουλές επαγγελματιών διατροφολόγων και ως εκ τούτου είναι όσο πιο κοντά
  γίνεται στις καθημερινές ανάγκες τους. Έτσι, με το Nutriware μπορείς να εγγράψεις τους πελάτες σου αποθηκεύοντας τα στοιχεία τους. Έπειτα μπορείς να
  καταγράψεις τις διατροφικές τους προτιμήσεις, την διατροφή του τελευταίου 24ώρου τους, να αποθηκεύσεις αιματολογικές και βιοχημικές εξετάσεις τους αλλά και 
  να τους σχεδιάσεις διαιτολόγια με βάση τους Ελληνικούς πίνακες σύστασης τροφίμων. Τέλος, παρέχεται λειτουργικότητα για αυτόματο υπολογισμό ισοδυνάμων, καθώς 
  και ημερολόγιο για την καταγραφή και διαχείριση ραντεβου.
  </p>
</div>

<button class='accordion'>Τι μπορουν να κάνουν οι πελάτες μου με το Nutriware</button>
<div class='panel'>
  <p>Με την εγγραφή ενός πελάτη στο σύστημα, την οποία πραγματοποιείτε εσείς, του δίνετε τα Username και Password που σας δίνει το Nutriware.
    Απο 'κει και πέρα, οι πελάτες σας έχουν πρόσβαση στο σύστημα και μπορούν ανα πάσσα στιγμή να πραγματοποιήσουν είσοδο και να δουν το εβδομαδιαίο διαιτολόγιο
    που τους έχετε σχεδιάσει αλλά και να παρέχουν σχόλια και παρατηρήσεις σε εσάς σχετικά με το διαιτολόγιο ή την πρόοδο τους, στα οποία εσείς έχετε άμεσα πρόσβαση.
</p>
</div>

<button class='accordion'>Τι κόστος έχει η χρήση του</button>
<div class='panel'>
  <p>Με την εγγραφή σας στο Nutriware ενεργοποείται η δωρεάν δοκιμαστική περίοδος των δύο εβδομάδων. Με την λήξη αυτής της περιόδου θα σας ζητηθεί
    να ανανεώσετε την συνδρομή σας για ένα έτος με κόστος 100€.
</p>
</div>

<button class='accordion'>Απο ποιόν αναπτύχθηκε</button>
<div class='panel'>
  <p>Το Nutriware αναπτύχθηκε απο τον Παρασχίδη Παναγιώτη, φοιτητή του τμήματος Επιστήμης Υπολογιστών του Πανεπιστημίου Κρήτης, σε συνεργασία
  με επαγγελματίες διατροφολόγους. Οι πίνακες σύστασης τροφίμων αναπτύχθηκαν απο το τμήμα Ιατρικής του Πανεπιστημίου Κρήτης.</p>
</div>

<script>
var acc = document.getElementsByClassName('accordion');
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle('active');
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + 'px';
    } 
  }
}
</script>

       
           
          
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
     }else if($_SESSION['status']=="Active1"){
       
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
              
                <li><a href='client_diets.php'>Διαιτολόγιο</a></li>
                <li ><a href='client_profile.php'>Προφίλ</a></li>
                <li><a href='comm.php'>Επικοινωνία</a></li>
                <li  class='active'><a href='faq.php''>Συχνές Ερωτήσεις</a></li>
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
            <li class='active'>Συχνές Ερωτήσεις</li>        
          </ol>
        </div>
        <!---main content--->
        
         
    <style>
button.accordion {
    background-color: #F4F4F4;
    color: #373737;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #C0B283;
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>

   <div class='container' >
<br><br>
<h2>Συχνές Ερωτήσεις</h2>
<button class='accordion'>Τι είναι το Nutriware</button>
<div class='panel'>
  <p>Το Nutriware αποτελεί το πρώτο Ελληνικό σύστημα διαχείρησης πελατών για διαιτολόγους/διατροφολόγους. Το μόνο που χρείαζεται για να λειτουργήσει
  είναι μια συσκυή με πρόσβαση στο ίντερνετ, μιας και έχει σχεδιαστεί με τέτοιο τρόπο που μπορεί να χρησιμοποιηθεί τόσο απο υπολογιστή
  όσο και απο ταμπλέτες και κινητά.</p>
</div>

<button class='accordion'>Σε ποιούς απευθύνεται το Nutriware</button>
<div class='panel'>
  <p>Το Nutriware έχει σχεδιαστεί αποκλειστικά για χρήση απο Έλληνες διατροφολόγους/διαιτολόγους, αλλά και τους πελάτες τους, με γνώμονα
  την ευχρηστία και την λειτουργικότητα.</p>
</div>

<button class='accordion'>Τι μπορώ να κάνω εγώ με το Nutriware</button>
<div class='panel'>
  <p>
  Με το Nutriware επιλέγοντας Διαιτολόγιο, έχεις πρόσβαση στο εβδομαδιαίο διαιτολόγιο σου όπου και αν είσαι. Επιπλέον μπορείς να στέλνεις σχόλια και παρατηρήσεις
  σχετικά με την πρόοδό σου απευθείας στον διατροφολόγο σου.  
  </p>
</div>

<button class='accordion'>Απο ποιόν αναπτύχθηκε</button>
<div class='panel'>
  <p>Το Nutriware αναπτύχθηκε απο τον Παρασχίδη Παναγιώτη, φοιτητή του τμήματος Επιστήμης Υπολογιστών του Πανεπιστημίου Κρήτης, σε συνεργασία
  με επαγγελματίες διατροφολόγους. Οι πίνακες σύστασης τροφίμων αναπτύχθηκαν απο το τμήμα Ιατρικής του Πανεπιστημίου Κρήτης.</p>
</div>



<script>
var acc = document.getElementsByClassName('accordion');
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle('active');
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + 'px';
    } 
  }
}
</script>

 
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
	 
    
     </body>
     </html>";
             
     }
     else{
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
                <li  class='active'><a href='faq.php''>Συχνές Ερωτήσεις</a></li>
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
           
            <li class='active'>Συχνές Ερωτήσεις</li>        
          </ol>
        </div>
        <!---main content--->
         
    
       <style>
button.accordion {
    background-color: #F4F4F4;
    color: #373737;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #C0B283;
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>

   <div class='container' >
<br><br>
<h2>Συχνές Ερωτήσεις</h2>
<button class='accordion'>Τι είναι το Nutriware</button>
<div class='panel'>
  <p>Το Nutriware αποτελεί το πρώτο Ελληνικό σύστημα διαχείρησης πελατών για διαιτολόγους/διατροφολόγους. Το μόνο που χρείαζεται για να λειτουργήσει
  είναι μια συσκυή με πρόσβαση στο ίντερνετ, μιας και έχει σχεδιαστεί με τέτοιο τρόπο που μπορεί να χρησιμοποιηθεί τόσο απο υπολογιστή
  όσο και απο ταμπλέτες και κινητά.</p>
</div>

<button class='accordion'>Σε ποιούς απευθύνεται το Nutriware</button>
<div class='panel'>
  <p>Το Nutriware έχει σχεδιαστεί αποκλειστικά για χρήση απο Έλληνες διατροφολόγους/διαιτολόγους, αλλά και τους πελάτες τους, με γνώμονα
  την ευχρηστία και την λειτουργικότητα.</p>
</div>

<button class='accordion'>Τι λειτουργίες παρέχει το Nutriware</button>
<div class='panel'>
  <p>Οι λειτουργίες που παρέχονται σχεδιάστηκαν με βάση τις συμβουλές επαγγελματιών διατροφολόγων και ως εκ τούτου είναι όσο πιο κοντά
  γίνεται στις καθημερινές ανάγκες τους. Έτσι, με το Nutriware μπορείς να εγγράψεις τους πελάτες σου αποθηκεύοντας τα στοιχεία τους. Έπειτα μπορείς να
  καταγράψεις τις διατροφικές τους προτιμήσεις, την διατροφή του τελευταίου 24ώρου τους, να αποθηκεύσεις αιματολογικές και βιοχημικές εξετάσεις τους αλλά και 
  να τους σχεδιάσεις διαιτολόγια με βάση τους Ελληνικούς πίνακες σύστασης τροφίμων. Τέλος, παρέχεται λειτουργικότητα για αυτόματο υπολογισμό ισοδυνάμων, καθώς 
  και ημερολόγιο για την καταγραφή και διαχείριση ραντεβου.
  </p>
</div>

<button class='accordion'>Τι μπορουν να κάνουν οι πελάτες μου με το Nutriware</button>
<div class='panel'>
  <p>Με την εγγραφή ενός πελάτη στο σύστημα, την οποία πραγματοποιείτε εσείς, του δίνετε τα Username και Password που σας δίνει το Nutriware.
    Απο 'κει και πέρα, οι πελάτες σας έχουν πρόσβαση στο σύστημα και μπορούν ανα πάσσα στιγμή να πραγματοποιήσουν είσοδο και να δουν το εβδομαδιαίο διαιτολόγιο
    που τους έχετε σχεδιάσει αλλά και να παρέχουν σχόλια και παρατηρήσεις σε εσάς σχετικά με το διαιτολόγιο ή την πρόοδο τους, στα οποία εσείς έχετε άμεσα πρόσβαση.
</p>
</div>

<button class='accordion'>Τι κόστος έχει η χρήση του</button>
<div class='panel'>
  <p>Με την εγγραφή σας στο Nutriware ενεργοποείται η δωρεάν δοκιμαστική περίοδος των δύο εβδομάδων. Με την λήξη αυτής της περιόδου θα σας ζητηθεί
    να ανανεώσετε την συνδρομή σας για ένα έτος με κόστος 100€.
</p>
</div>

<button class='accordion'>Απο ποιόν αναπτύχθηκε</button>
<div class='panel'>
  <p>Το Nutriware αναπτύχθηκε απο τον Παρασχίδη Παναγιώτη, φοιτητή του τμήματος Επιστήμης Υπολογιστών του Πανεπιστημίου Κρήτης, σε συνεργασία
  με επαγγελματίες διατροφολόγους. Οι πίνακες σύστασης τροφίμων αναπτύχθηκαν απο το τμήμα Ιατρικής του Πανεπιστημίου Κρήτης.</p>
</div>

<script>
var acc = document.getElementsByClassName('accordion');
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle('active');
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + 'px';
    } 
  }
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
     
     
     