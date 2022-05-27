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
        
           
                  $client=$_SESSION['client'];
    $sql1="SELECT * FROM `client` WHERE `Username` = '$client'";
    $res1=mysqli_query($conn, $sql1);
    $row1= mysqli_fetch_assoc($res1);
    $cid=$row1['Cid'];
            
$v1=filter_input(INPUT_POST, 'freq'); 
$v2=filter_input(INPUT_POST, 'freq1'); 
$v3=filter_input(INPUT_POST, 'freq2'); 
$v4=filter_input(INPUT_POST, 'freq3'); 
$v5=filter_input(INPUT_POST, 'freq4'); 
$v6=filter_input(INPUT_POST, 'freq5'); 
$v7=filter_input(INPUT_POST, 'freq6'); 
$v8=filter_input(INPUT_POST, 'freq7'); 
$v9=filter_input(INPUT_POST, 'freq8'); 
$v10=filter_input(INPUT_POST, 'freq9');

$v11=filter_input(INPUT_POST, 'freq10'); 
$v12=filter_input(INPUT_POST, 'freq11'); 
$v13=filter_input(INPUT_POST, 'freq12'); 
$v14=filter_input(INPUT_POST, 'freq13'); 
$v15=filter_input(INPUT_POST, 'freq14'); 
$v16=filter_input(INPUT_POST, 'freq15'); 
$v17=filter_input(INPUT_POST, 'freq16'); 
$v18=filter_input(INPUT_POST, 'freq17'); 
$v19=filter_input(INPUT_POST, 'freq18'); 
$v20=filter_input(INPUT_POST, 'freq19'); 

$v21=filter_input(INPUT_POST, 'freq20'); 
$v22=filter_input(INPUT_POST, 'freq21'); 
$v23=filter_input(INPUT_POST, 'freq22'); 
$v24=filter_input(INPUT_POST, 'freq23'); 
$v25=filter_input(INPUT_POST, 'freq24'); 
$v26=filter_input(INPUT_POST, 'freq25'); 
$v27=filter_input(INPUT_POST, 'freq26'); 
$v28=filter_input(INPUT_POST, 'freq27'); 
$v29=filter_input(INPUT_POST, 'freq28'); 
$v30=filter_input(INPUT_POST, 'freq29'); 

$v31=filter_input(INPUT_POST, 'freq30'); 
$v32=filter_input(INPUT_POST, 'freq31'); 
$v33=filter_input(INPUT_POST, 'freq32'); 
$v34=filter_input(INPUT_POST, 'freq33'); 
$v35=filter_input(INPUT_POST, 'freq34'); 
$v36=filter_input(INPUT_POST, 'freq35'); 
$v37=filter_input(INPUT_POST, 'freq36'); 
$v38=filter_input(INPUT_POST, 'freq37'); 
$v39=filter_input(INPUT_POST, 'freq38'); 
$v40=filter_input(INPUT_POST, 'freq39'); 

$v41=filter_input(INPUT_POST, 'freq40'); 
$v42=filter_input(INPUT_POST, 'freq41'); 
$v43=filter_input(INPUT_POST, 'freq42'); 
$v44=filter_input(INPUT_POST, 'freq43'); 
$v45=filter_input(INPUT_POST, 'freq44'); 
$v46=filter_input(INPUT_POST, 'freq45'); 
$v47=filter_input(INPUT_POST, 'freq46'); 
$v48=filter_input(INPUT_POST, 'freq47'); 
$v49=filter_input(INPUT_POST, 'freq48'); 
$v50=filter_input(INPUT_POST, 'freq49'); 

$v51=filter_input(INPUT_POST, 'freq50'); 
$v52=filter_input(INPUT_POST, 'freq51'); 
$v53=filter_input(INPUT_POST, 'freq52'); 
$v54=filter_input(INPUT_POST, 'freq53'); 
$v55=filter_input(INPUT_POST, 'freq54'); 
$v56=filter_input(INPUT_POST, 'freq55'); 
$v57=filter_input(INPUT_POST, 'freq56'); 
$v58=filter_input(INPUT_POST, 'freq57'); 
$v59=filter_input(INPUT_POST, 'freq58'); 
$v60=filter_input(INPUT_POST, 'freq59'); 

$v61=filter_input(INPUT_POST, 'freq60'); 
$v62=filter_input(INPUT_POST, 'freq61'); 
$v63=filter_input(INPUT_POST, 'freq62'); 
$v64=filter_input(INPUT_POST, 'freq63'); 
$v65=filter_input(INPUT_POST, 'freq64'); 
$v66=filter_input(INPUT_POST, 'freq65'); 
$v67=filter_input(INPUT_POST, 'freq66'); 
$v68=filter_input(INPUT_POST, 'freq67'); 
$v69=filter_input(INPUT_POST, 'freq68'); 
$v70=filter_input(INPUT_POST, 'freq69'); 

$v71=filter_input(INPUT_POST, 'freq70'); 
$v72=filter_input(INPUT_POST, 'freq71'); 
$v73=filter_input(INPUT_POST, 'freq72'); 
$v74=filter_input(INPUT_POST, 'freq73'); 
$v75=filter_input(INPUT_POST, 'freq74'); 
$v76=filter_input(INPUT_POST, 'freq75'); 
$v77=filter_input(INPUT_POST, 'freq76'); 
$v78=filter_input(INPUT_POST, 'freq77'); 
$v79=filter_input(INPUT_POST, 'freq78'); 
$v80=filter_input(INPUT_POST, 'freq79');

$v81=filter_input(INPUT_POST, 'freq80'); 
$v82=filter_input(INPUT_POST, 'freq81'); 
$v83=filter_input(INPUT_POST, 'freq82'); 
$v84=filter_input(INPUT_POST, 'freq83'); 
$v85=filter_input(INPUT_POST, 'freq84'); 
$v86=filter_input(INPUT_POST, 'freq85'); 
$v87=filter_input(INPUT_POST, 'freq86'); 
$v88=filter_input(INPUT_POST, 'freq87'); 
$v89=filter_input(INPUT_POST, 'freq88'); 
$v90=filter_input(INPUT_POST, 'freq89');

$v91=filter_input(INPUT_POST, 'freq90'); 
$v92=filter_input(INPUT_POST, 'freq91'); 
$v93=filter_input(INPUT_POST, 'freq92'); 
$v94=filter_input(INPUT_POST, 'freq93'); 
$v95=filter_input(INPUT_POST, 'freq94'); 
$v96=filter_input(INPUT_POST, 'freq95'); 
$v97=filter_input(INPUT_POST, 'freq96'); 
$v98=filter_input(INPUT_POST, 'freq97'); 
$v99=filter_input(INPUT_POST, 'freq98'); 
$v100=filter_input(INPUT_POST, 'freq99'); 

$v101=filter_input(INPUT_POST, 'freq100'); 
$v102=filter_input(INPUT_POST, 'freq101'); 
$v103=filter_input(INPUT_POST, 'freq102'); 
$v104=filter_input(INPUT_POST, 'freq103'); 
$v105=filter_input(INPUT_POST, 'freq104'); 
$v106=filter_input(INPUT_POST, 'freq105'); 
$v107=filter_input(INPUT_POST, 'freq106'); 
$v108=filter_input(INPUT_POST, 'freq107'); 
$v109=filter_input(INPUT_POST, 'freq108'); 
$v110=filter_input(INPUT_POST, 'freq109'); 

$v111=filter_input(INPUT_POST, 'freq110'); 
$v112=filter_input(INPUT_POST, 'freq111'); 
$v113=filter_input(INPUT_POST, 'freq112'); 
$v114=filter_input(INPUT_POST, 'freq113'); 
$v115=filter_input(INPUT_POST, 'freq114'); 
$v116=filter_input(INPUT_POST, 'freq115'); 
$v117=filter_input(INPUT_POST, 'freq116'); 
$v118=filter_input(INPUT_POST, 'freq117'); 
$v119=filter_input(INPUT_POST, 'freq118'); 
$v120=filter_input(INPUT_POST, 'freq119'); 

$v121=filter_input(INPUT_POST, 'freq120'); 
$v122=filter_input(INPUT_POST, 'freq121'); 
$v123=filter_input(INPUT_POST, 'freq122'); 
$v124=filter_input(INPUT_POST, 'freq123'); 
$v125=filter_input(INPUT_POST, 'freq124'); 
$v126=filter_input(INPUT_POST, 'freq125'); 
$v127=filter_input(INPUT_POST, 'freq126'); 
$v128=filter_input(INPUT_POST, 'freq127'); 
$v129=filter_input(INPUT_POST, 'freq128'); 
$v130=filter_input(INPUT_POST, 'freq129');

$v131=filter_input(INPUT_POST, 'freq130'); 
$v132=filter_input(INPUT_POST, 'freq131'); 
$v133=filter_input(INPUT_POST, 'freq132'); 
$v134=filter_input(INPUT_POST, 'freq133'); 
$v135=filter_input(INPUT_POST, 'freq134'); 
$v136=filter_input(INPUT_POST, 'freq135'); 

 $sql="INSERT INTO `frequency` (`cid`, `ena`, `duo`, `tria`, `tessera`, `pente`, `eksi`, `efta`, `oxto`, `ennia`, `deka`, `enteka`, 
         `dodeka`, `dekatria`, `dekatessera`, `dekapente`, `dekaeksi`, `dekaefta`, `dekaoxto`, `dekaennia`, `eikosi`, 
         `eikosiena`, `eikosiduo`, `eikositria`, `eikositessera`, `eikosipente`, `eikosieksi`, `eikosiefta`, `eikosioxto`,
         `eikosiennia`, `trianta`, `triantaena`, `triantaduo`, `triantatria`, `triantatessera`, `triantapente`, `triantaeksi`,
         `triantaefta`, `triantaoxto`, `triantaennia`, `saranta`, `sarantaena`, `sarantaduo`, `sarantatria`, `sarantatessera`, 
         `sarantapente`, `sarantaeksi`, `sarantaefta`, `sarantaoxto`, `sarantaennia`, `peninta`, `penintaena`, `penintaduo`, 
         `penintatria`, `penintatessera`, `penintapente`, `penintaeksi`, `penintaefta`, `penintaoxto`, `penintaennia`, `eksinta`,
         `eksintaena`, `eksintaduo`, `eksintatria`, `eksintatessera`, `eksintapente`, `eksintaeksi`, `eksintaefta`, `eksintaoxto`,
         `eksintaennia`, `evdominta`, `evdomintaena`, `evdomintaduo`, `evdomintatria`, `evdomintatessera`, `evdomintapente`, 
         `evdomintaeksi`, `evdomintaefta`, `evdomintaoxto`, `evdomintaennia`, `ogdonta`, `ogdontaena`, `ogdontaduo`, `ogdontatria`, 
         `ogdontatessera`, `ogdontapente`, `ogdontaeksi`, `ogdontaefta`, `ogdontaoxto`, `ogdontaennia`, `eneninta`, `enenintaena`, 
         `enenintaduo`, `enenintatria`, `enenintatessera`, `enenintapente`, `enenintaeksi`, `enenintaefta`, `enenintaoxto`, `enenintaennia`,
         `ekato`, `ekatonena`, `ekatonduo`, `ekatontria`, `ekatontessera`, `ekatonpente`, `ekatoneksi`, `ekatonefta`, `ekatonoxto`,
         `ekatonennia`, `ekatondeka`, `ekatonenteka`, `ekatondodeka`, `ekatondekatria`, `ekatondekatessera`, `ekatondekapente`, 
         `ekatondekaeksi`, `ekatondekaefta`, `ekatondekaoxto`, `ekatondekaennia`, `ekatoneikosi`, `ekatoneikosiena`, `ekatoneikosiduo`,
         `ekatoneikositria`, `ekatoneikositessera`, `ekatoneikosipente`, `ekatoneikosieksi`, `ekatoneikosiefta`, `ekatoneikosioxto`, 
         `ekatoneikosiennia`, `ekatontrianta`, `ekatontriantaena`, `ekatontriantaduo`, `ekatontriantatria`, `ekatontriantatessera`,
         `ekatontriantapente`,  `ekatontriantaeksi`) VALUES ('$cid','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11','$v12','$v13',
         '$v14','$v15','$v16','$v17','$v18','$v19','$v20','$v21','$v22','$v23','$v24','$v25','$v26','$v27','$v28','$v29','$v30','$v31','$v32',
         '$v33','$v34','$v35','$v36','$v37','$v38','$v39','$v40','$v41','$v42','$v43','$v44','$v45','$v46','$v47','$v48','$v49','$v50','$v51',
         '$v52','$v53','$v54','$v55','$v56','$v57','$v58','$v59','$v60','$v61','$v62','$v63','$v64','$v65','$v66','$v67','$v68','$v69','$v70','$v71',
         '$v72','$v73','$v74','$v75','$v76','$v77','$v78','$v79','$v80','$v81','$v82','$v83','$v84','$v85','$v86','$v87','$v88','$v89','$v90','$v91',
         '$v92','$v93','$v94','$v95','$v96','$v97','$v98','$v99','$v100','$v101','$v102','$v103','$v104','$v105','$v106','$v107','$v108','$v109','$v110',
         '$v111','$v112','$v113','$v114','$v115','$v116','$v117','$v118','$v119','$v120','$v121','$v122','$v123','$v124','$v125','$v126','$v127','$v128',
         '$v129','$v130','$v131','$v132','$v133','$v134','$v135','$v136') ";
 $res= mysqli_query($conn, $sql);
 
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
            <li><a href='clients.php'>Περισσότερα</a></li>
            <li class='active'>Προσθήκη Διατροφικών Προτιμήσεων</li>        
          </ol>
        </div>
        
        <div class='container'>
        <br><br><h2>Οι διατροφικές προτιμήσεις αποθηκεύτηκαν με επιτυχία</h2>   
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
