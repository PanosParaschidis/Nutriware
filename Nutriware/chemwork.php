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
     
 

  
    $client=$_SESSION['client'];
    $sql1="SELECT * FROM `client` WHERE `Username` = '$client'";
    $res1=mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_assoc($res1);
    $cid=$row1['Cid'];

    $sql2="SELECT * FROM `tests` WHERE `Cid` = '$cid' and `Type`='biochem'";
    $res2= mysqli_query($conn, $sql2);

     echo "
<html>
                     <head>
       
          <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
<link rel='icon' href='favicon.ico' type='image/x-icon'>
    <link rel='stylesheet' href='bootstrap/css/bootstrap.min.css' type='text/css'/>
    <link rel='stylesheet' href='bootstrap/css/bootstrap.css' type='text/css'>
        
        <link rel='stylesheet' href='mycss.css' type='text/css'/>
<script src='pdfmake.min.js'></script>
 	<script src='vfs_fonts.js'></script>
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
               <li><a href='clients.php'>Περισσότερα</a></li>
            <li class='active'>Ιστορικό Βιοχημικών Εξετάσεων</li>        
          </ol>
        </div>
        <!---main content--->

";

if(!(mysqli_num_rows($res2)>0)){
    echo "<br><br><h2>Δεν βρέθηκαν αποτελέσματα αιματολογικών εξετάσεων για τον συγκεκριμένο πελάτη</h2>";
}
else{
     echo "<div class='container'>"
    . "<br><br><h2>Επιλέξτε Ημερομηνία</h2>";
     echo "<form class='form-horizontal'>
         <div class='col-sm-5'>
                       <select class='form-control' id='client' name='client' onchange='showChem(this.value)'>
                           <option value=''> </option>";
     
    while($row2=mysqli_fetch_assoc($res2)){
          echo " 
                        <option  value='".$row2['Date']."'>". date('d-m-Y', strtotime($row2['Date']))."</option>
                      
                    ";
    }
         
    echo "   </select>
                  </div>
                  </div>
                  <br><br><br>
                  <div id='info' class='container'>
                  <br><br>
                </div>";
             echo "   
                
                 
                    </form>" ;

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
	  <script>
    
    function test(tes){

        
        var cont=document.getElementById('content');
  var docDefinition = {
   header: {
    columns: [
      {text: 'Nutriware' , bold:true, fontSize: 16 , color: '#373737' },
  
    ]
  },
  
  footer: function(currentPage, pageCount) {  return { text: currentPage.toString() , alignment: 'center' };
  },
  content: [
 {text: 'Ονοματεπώνυμο:'+' '+ tes[11] +' '+ tes[12], bold:true},
 {text: 'Ημερομηνία:'+' '+tes[13] , bold:true}, 
 ' ',
  {text: 'Βιοχημικές Εξετάσεις' , bold:true, fontSize: 14, alignment: 'center' }, 
  ' ',
  {
  columns: [
    { text: 'Περιγραφή', bold:true, fontSize: 14 },
    { text: 'Αποτελέσματα', bold:true, fontSize: 14 },
    { text: 'Μονάδα Μέτρησης', bold:true, fontSize: 14 },
    { text: 'Τιμές Αναφοράς', bold:true, fontSize: 14 },
    ] 
    },
   {
   columns: [
     { text: 'Χοληστερόλη Ολική:', bold:true},
     tes[0],
     'mg/dL',
     '	Γ:<200 Α:<200'
     ]},
     {
   columns: [
     { text: 'HDL Χοληστερόλη:', bold:true},
     tes[1],
     'mg/dL',
     'Γ:40-60 Α:40-60'
     ]},
     {
   columns: [
     { text: 'LDL Χοληστερόλη:', bold:true},
     tes[2],
     'mg/dL',
     'Γ:<30 Α:<30'
     ]},
     {
      columns: [
     { text: 'Σίδηρος Ορού:', bold:true},
     tes[3],
     'μg/dL',
     'Γ:50-170 Α:55-160'
     ]},
     {
    columns: [
     { text: 'Γλυκόζη:', bold:true},
     tes[4],
     'mg/dL',
     'Γ:70-110 Α:70-100'
     ]},
     {
    columns: [
     { text: 'Ουρία:', bold:true},
     tes[5],
     'mg/dL',
     'Γ:15-40 Α:18-55'
     ]},
     {
        columns: [
     { text: 'Κρεατινίνη Ορού:', bold:true},
     tes[6],
     'mg/dL',
     'Γ:0,57-1,11 Α:0,71-1,25'
     ]},
     {
         columns: [
     { text: 'Κάλλιο:', bold:true},
     tes[7],
     'Eq/L',
     'Γ:3,35-5,3 Α:3,3,35-5,3'
    ]},
    {
        columns: [
     { text: 'Νάτριο:', bold:true},
     tes[8],
     'Eq/L',
     'Γ:135-153 Α:135-153'
     ]},
     {
        columns: [
     { text: 'Ουρικό Οξύ:', bold:true},
     tes[9],
     'mg/dL',
     'Γ:2,4-6,0 Α:3,5-7,2'
     ]},
     {
        columns: [
     { text: 'Τριγλυκερίδια:', bold:true},
     tes[10],
     'mg/dL',
     'Γ:<150 Α:<150'
     ]}
    ]
     };
  

 
  pdfMake.createPdf(docDefinition).download('$client biochem ' + tes[13]);
    }
    </script>	 
    
    </body>
    </html>";
    
    mysqli_close($conn); 
    