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
    $nid=$row['Nid'];

  
    $client=$_SESSION['client'];
    $sql1="SELECT * FROM `client` WHERE `Username` = '$client'";
    $res1=mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_assoc($res1);
    $cid=$row1['Cid'];
     
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
<script src='pdfmake.min.js'></script>
 	<script src='vfs_fonts.js'></script>
         <script type='text/javascript'  src='myjavascript.js'></script>
          <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
          <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
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
            <li class='active'>Ιστορικό Διαιτολογίων</li>        
          </ol>
        </div>
        <!---main content--->
      
";
if(mysqli_num_rows($res2)==0){
    echo "<br><br><h2>Δεν βρέθηκαν διαιτολόγια για τον συγκεκριμένο πελάτη</h2>";
}
else{
     echo "<div class='container'>"
    . "<br><br><h2>Επιλέξτε Ημερομηνία</h2>";
     echo "<form class='form-horizontal' >
         <div class='col-sm-5'>
                       <select class='form-control' id='client' name='client' onchange='showDiet(this.value)'>
                           <option value=''> </option>";
     
    while($row2=mysqli_fetch_assoc($res2)){
          echo " 
                        <option  value='".$row2['Date']."'>". date('d-m-Y', strtotime($row2['Date']))."</option>
                      
                    ";
    }
    echo "  </select>
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

	 
    
    </body>
    </html>
     <script>
    
    function test(tes){

        
        var cont=document.getElementById('content');
  var docDefinition = {
   header: {
    columns: [
      {text: 'Nutriware' , bold:true, fontSize: 16 , color: '#373737' },
    {text: tes[38]+' '+tes[39] , color: '#373737', alignment: 'right' },
  
    ]
  },
  
  footer: function(currentPage, pageCount) {  return { text: currentPage.toString() , alignment: 'center' };
  },
  content: [
 {text: 'Ονοματεπώνυμο:'+' '+ tes[35] +' '+ tes[36], bold:true},
 {text: 'Ημερομηνία:'+' '+tes[37] , bold:true}, 
 {text: 'Βάρος:'+' '+tes[40]+'kg' , bold:true}, 
 {text: 'Επόμενο Ραντεβού:'+' '+tes[41], bold:true},
 ' ',
  {text: 'Εβδομαδιαίο Πρόγραμμα Διατροφής' , bold:true, fontSize: 14, alignment: 'center' }, 

 
  ' ',
    { text: '1η Ημέρα:', bold:true, fontSize: 14 },
     { text: 'Πρωινό:', bold:true},
     tes[0],
     ' ',
     { text: 'Δεκατιανό:', bold:true},
     tes[1],
     ' ',
     { text: 'Μεσημεριανό:', bold:true},
     tes[2],
     ' ',
     { text: 'Απογευματινό:', bold:true},
     tes[3],
     ' ',
     { text: 'Βραδινό:', bold:true},
     tes[4],
     ' ',
     ' ',
     { text: '2η Ημέρα:', bold:true, fontSize: 14 },
     { text: 'Πρωινό:', bold:true},
     tes[5],
     ' ',
     { text: 'Δεκατιανό:', bold:true},
     tes[6],
     ' ',
     { text: 'Μεσημεριανό:', bold:true},
     tes[7],
     ' ',
     { text: 'Απογευματινό:', bold:true},
     tes[8],
     ' ',
     { text: 'Βραδινό:', bold:true},
     tes[9],
     ' ',
     ' ',
      { text: '3η Ημέρα:', bold:true, fontSize: 14 },
     { text: 'Πρωινό:', bold:true},
     tes[10],
     ' ',
     { text: 'Δεκατιανό:', bold:true},
     tes[11],
     ' ',
     { text: 'Μεσημεριανό:', bold:true},
     tes[12],
     ' ',
     { text: 'Απογευματινό:', bold:true},
     tes[13],
     ' ',
     { text: 'Βραδινό:', bold:true},
     tes[14],
     ' ',
     ' ',
      { text: '4η Ημέρα:', bold:true, fontSize: 14 },
     { text: 'Πρωινό:', bold:true},
     tes[15],
     ' ',
     { text: 'Δεκατιανό:', bold:true},
     tes[16],
     ' ',
     { text: 'Μεσημεριανό:', bold:true},
     tes[17],
     ' ',
     { text: 'Απογευματινό:', bold:true},
     tes[18],
     ' ',
     { text: 'Βραδινό:', bold:true},
     tes[19],
     ' ',
     ' ',
      { text: '5η Ημέρα:', bold:true, fontSize: 14 },
     { text: 'Πρωινό:', bold:true},
     tes[20],
     ' ',
     { text: 'Δεκατιανό:', bold:true},
     tes[21],
     ' ',
     { text: 'Μεσημεριανό:', bold:true},
     tes[22],
     ' ',
     { text: 'Απογευματινό:', bold:true},
     tes[23],
     ' ',
     { text: 'Βραδινό:', bold:true},
     tes[24],
     ' ',
     ' ',
      { text: '6η Ημέρα:', bold:true, fontSize: 14 },
     { text: 'Πρωινό:', bold:true},
     tes[25],
     ' ',
     { text: 'Δεκατιανό:', bold:true},
     tes[26],
     ' ',
     { text: 'Μεσημεριανό:', bold:true},
     tes[27],
     ' ',
     { text: 'Απογευματινό:', bold:true},
     tes[28],
     ' ',
     { text: 'Βραδινό:', bold:true},
     tes[29],
     ' ',
     ' ',
      { text: '7η Ημέρα:', bold:true, fontSize: 14 },
     { text: 'Πρωινό:', bold:true},
     tes[30],
     ' ',
     { text: 'Δεκατιανό:', bold:true},
     tes[31],
     ' ',
     { text: 'Μεσημεριανό:', bold:true},
     tes[32],
     ' ',
     { text: 'Απογευματινό:', bold:true},
     tes[33],
     ' ',
     { text: 'Βραδινό:', bold:true},
     tes[34],
     ' ',
     ' ',
     
  ]
};
 
  pdfMake.createPdf(docDefinition).download('$client diet ' + tes[37]);
    }
    </script>

";
    
        mysqli_close($conn); 
