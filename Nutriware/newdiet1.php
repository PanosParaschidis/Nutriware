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
     
     
     $day=$_SESSION['day'];
     $client=$_SESSION['client'];
   
        $sql2="SELECT * FROM `client` WHERE `Username` = '$client'";
     $res2=mysqli_query($conn, $sql2);
     $row2= mysqli_fetch_assoc($res2);
     
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
     
                <li><a href='profile.php'>????????????</a></li>
                <li><a href='comm.php'>??????????????????????</a></li>
                <li><a href='faq.php''>???????????? ??????????????????</a></li>
                <li><a href='signout.php'>????????????????????</a></li>
            </ul>      
          </div>
            
            
             <ul class='nav nav-pills navbar-right' id='choicemenu'>
                 <li><a href='#' class='menuButton' onclick='openNav()'>??????????</a> </li>
             </ul>
          
        </div>
      </nav>
     </div>
        <div id='bread' class='pull-left'>
            <ol class='breadcrumb'>
            <li><a href='profile.php'>????????????</a></li>
            <li><a href='profile.php'>??????????????</a></li>
            <li><a href='clients.php'>???? ?????????????? ??????</a></li>
            <li class='active'>???????????????????? ????????????????????????</li>        
          </ol>
        </div>
        
        <div class='container'>
            <form class='form-horizontal' method='post' action='exec_newdiet.php'>
                <br><br>
                  <h2>???????????????????? ???????? ????????????????????????</h2>
                   <div class='form-group'> 
                <label class='control-label col-sm-2' for='client'>??????????????:</label>
                  <div class='col-sm-4'>
                       <select class='form-control' id='client' name='client'>
                           <option value='".$client."'> ".$row2['Fname']." ".$row2['Lname']."</option>";
                  
    if(mysqli_num_rows($res1)>0){
        while($row1= mysqli_fetch_assoc($res1)){ 
           if($row1['Username']!=$client){
                 echo " 
                        <option value='".$row1['Username']."'>".$row1['Fname']." ".$row1['Lname']."</option>
                      
                    ";
           }
          
        }
    }
          echo "  </select>
                  </div>
                </div>
             
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='day'>??????????:</label>
                  <div class='col-sm-4'>
                       <select class='form-control' id='day' name='day'>";
          if($day==1){
              echo " 
                        <option value='2'>2??</option>
                        <option value='3'>3??</option>
                        <option value='4'>4??</option>
                        <option value='5'>5??</option>
                        <option value='6'>6??</option>
                        <option value='7' >7??</option>
                        ";
          }else if($day==2){
              echo " 
                        <option value='3'>3??</option>
                        <option value='4'>4??</option>
                        <option value='5'>5??</option>
                        <option value='6'>6??</option>
                        <option value='7' >7??</option>
                        ";
          }else if($day==3){
              echo " 
                        
                        <option value='4'>4??</option>
                        <option value='5'>5??</option>
                        <option value='6'>6??</option>
                        <option value='7' >7??</option>
                        ";
          }else if($day==4){
              echo " 
                        
                        <option value='5'>5??</option>
                        <option value='6'>6??</option>
                        <option value='7' >7??</option>
                        ";
          }else if($day==5){
              echo " 
                        <option value='6'>6??</option>
                        <option value='7' >7??</option>
                        ";
          }else if($day==6){
              echo " 
                  
                        <option value='7' >7??</option>
                        ";
          }else if($day==7){
             header("Location: newdiet.php"); 
          }
          
          echo " 
                      </select>
                  </div>
                </div>
                     <div class='form-group'>
                  <label class='control-label col-sm-2' for='prwino'>????????????:</label>
                  <div class='col-sm-4'>
                      <textarea  class='form-control' id='prwino' name='prwino' placeholder=''></textarea>
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='dekatiano'>??????????????????:</label>
                  <div class='col-sm-4'>
                      <textarea  class='form-control' id='dekatiano' name='dekatiano' placeholder=''></textarea>
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='lunch'>??????????????????????:</label>
                  <div class='col-sm-4'>
                      <textarea  class='form-control' id='lunch' name='lunch' placeholder=''></textarea>
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='apogeumatino'>????????????????????????:</label>
                  <div class='col-sm-4'>
                      <textarea  class='form-control' id='apogeumatino' name='apogeumatino' placeholder=''></textarea>
                  </div>
                </div>
                  <div class='form-group'>
                  <label class='control-label col-sm-2' for='diner'>??????????????:</label>
                  <div class='col-sm-4'>
                      <textarea  class='form-control' id='diner' name='diner' placeholder=''></textarea>
                  </div>
                </div>
               <div class='form-group'>
                  <div class='col-sm-offset-2 col-sm-2'>
                    <button type='submit' class='btn btn-default'>???????????????????? ????????????</button>
                    
                  </div>
                </div>
              </form>
               <div class='form-group'>
                  <div class='col-sm-offset-2 col-sm-2'>
              <button id='myBtn' class='btn btn-default'>?????????????? ??????????????</button>
              </div>
              </div>
	  </div>
                   
             
  
        
        
        
        
 <!--hidden sidebar -->
            <div id='mySidenav' class='sidenav'>
                <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
                <a href='clients.php'>???? ?????????????? ??????</a>
                <a href='newclient.html'>???????? ??????????????</a>  <hr>
                <a href='newdiet.php'>???????????????????? ????????????????????????</a>
                <a href='equals.html'>?????????????????????? ????????????????????</a>
                 <a href='tables.php'>?????????????? ???????????????? ????????????????</a>  <hr>
                  <a href='appointment.php'>?????? ????????????????</a>
                  <a href='calendar.php'>????????????????????</a>
              </div>
 
       
            <div id='mySidenav1' class='sidenav'>
  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
  <a href='profile.php'>????????????</a> <hr>
  <a href='clients.php'>???? ?????????????? ??????</a>
  <a href='newclient.html'>???????? ??????????????</a>  <hr>
  <a href='newdiet.php'>???????????????????? ????????????????????????</a>
  <a href='equals.html'>?????????????????????? ????????????????????</a>
   <a href='tables.php'>?????????????? ???????????????? ????????????????</a>  <hr>
    <a href='appointment.php'>?????? ????????????????</a>
    <a href='calendar.php'>????????????????????</a> <hr>
      <a href='comm.php'>??????????????????????</a>
      <a href='faq.php'>???????????? ??????????????????</a>
      <a href='signout.php'>????????????????????</a>
    
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
             
          
          ?>

          
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #F4F4F4;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>



<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id='myModal' class='modal'>

  <!-- Modal content -->
  <div class='modal-content'>
    <span class='close'>&times;</span>
   <?php
   
     
 
     $cid=$row2['Cid'];
     
  $date=date("Y-m-d");
  $date1= date("Y-m-d",strtotime("$date - 6 days"));
      $sql0="SELECT * FROM `diet` WHERE `Nid` = '$Nid' and `Cid`='$cid' and `Date`>='$date1' and `Date`<='$date' ORDER BY `Did` DESC ";
$result01= mysqli_query($conn, $sql0);
 $row01=mysqli_fetch_assoc($result01);
  $did=$row01['Did'];

   $sql_day="SELECT * FROM `day` WHERE `Number` = 1 and `Did`='$did' and `Date`>='$date1' and `Date`<='$date'";
$res_day= mysqli_query($conn, $sql_day);
$row3=mysqli_fetch_assoc($res_day);
   echo "<h3>1?? ??????????: </h3><br>
       <h4> -????????????:<br> ".$row3['Proino']." </h4> <br>
       <h4>  -??????????????????:<br> ".$row3['Dekatiano']." </h4><br> 
        <h4> -??????????????????????:<br> ".$row3['Mesimeriano']." </h4><br>
       <h4>  -????????????????????????:<br> ".$row3['Apogeumatino']." </h4><br>
       <h4>  -??????????????:<br>  ".$row3['Vradino']." </h4><br>";

    $sql_day2="SELECT * FROM `day` WHERE `Number` = 2 and `Did`='$did' and `Date`>='$date1' and `Date`<='$date' ";
$res_day2= mysqli_query($conn, $sql_day2);
$row32=mysqli_fetch_assoc($res_day2);
   echo "<h3>2?? ??????????: </h3><br>
       <h4> -????????????: <br>".$row32['Proino']." </h4> <br>
       <h4>  -??????????????????:<br> ".$row32['Dekatiano']." </h4><br> 
        <h4> -??????????????????????: <br>".$row32['Mesimeriano']." </h4><br>
       <h4>  -????????????????????????: <br>".$row32['Apogeumatino']." </h4><br>
       <h4>  -??????????????:<br> ".$row32['Vradino']." </h4><br>";
   
    $sql_day3="SELECT * FROM `day` WHERE `Number` = 3 and `Did`='$did' and `Date`>='$date1' and `Date`<='$date' ";
$res_day3= mysqli_query($conn, $sql_day3);
$row33=mysqli_fetch_assoc($res_day3);
   echo "<h3>3?? ??????????: </h3><br>
       <h4> -????????????:<br> ".$row33['Proino']." </h4> <br>
       <h4>  -??????????????????:<br> ".$row33['Dekatiano']." </h4><br> 
        <h4> -??????????????????????:<br> ".$row33['Mesimeriano']." </h4><br>
       <h4>  -????????????????????????:<br> ".$row33['Apogeumatino']." </h4><br>
       <h4>  -??????????????:<br> ".$row33['Vradino']." </h4><br>";
   
    $sql_day4="SELECT * FROM `day` WHERE `Number` = 4 and `Did`='$did' and `Date`>='$date1' and `Date`<='$date' ";
$res_day4= mysqli_query($conn, $sql_day4);
$row34=mysqli_fetch_assoc($res_day4);
   echo "<h3>4?? ??????????: </h3><br>
       <h4> -????????????: <br>".$row34['Proino']." </h4> <br>
       <h4>  -??????????????????: <br>".$row34['Dekatiano']." </h4><br> 
        <h4> -??????????????????????:<br> ".$row34['Mesimeriano']." </h4><br>
       <h4>  -????????????????????????: <br>".$row34['Apogeumatino']." </h4><br>
       <h4>  -??????????????: <br>".$row34['Vradino']." </h4><br>";
   
    $sql_day5="SELECT * FROM `day` WHERE `Number` = 5 and `Did`='$did' and `Date`>='$date1' and `Date`<='$date' ";
$res_day5= mysqli_query($conn, $sql_day5);
$row35=mysqli_fetch_assoc($res_day5);
   echo "<h3>5?? ??????????: </h3><br>
       <h4> -????????????: <br>".$row35['Proino']." </h4> <br>
       <h4>  -??????????????????: <br>".$row35['Dekatiano']." </h4><br> 
        <h4> -??????????????????????: <br>".$row35['Mesimeriano']." </h4><br>
       <h4>  -????????????????????????: <br>".$row35['Apogeumatino']." </h4><br>
       <h4>  -??????????????:<br> ".$row35['Vradino']." </h4><br>";
   
    $sql_day6="SELECT * FROM `day` WHERE `Number` = 6 and `Did`='$did' and `Date`>='$date1' and `Date`<='$date' ";
$res_day6= mysqli_query($conn, $sql_day6);
$row36=mysqli_fetch_assoc($res_day6);
   echo "<h3>6?? ??????????: </h3><br>
       <h4> -????????????: <br>".$row36['Proino']." </h4> <br>
       <h4>  -??????????????????: <br>".$row36['Dekatiano']." </h4><br> 
        <h4> -??????????????????????: <br>".$row36['Mesimeriano']." </h4><br>
       <h4>  -????????????????????????: <br>".$row36['Apogeumatino']." </h4><br>
       <h4>  -??????????????: <br>".$row36['Vradino']." </h4><br>";
   
    $sql_day7="SELECT * FROM `day` WHERE `Number` = 7 and `Did`='$did' and `Date`>='$date1' and `Date`<='$date' ";
$res_day7= mysqli_query($conn, $sql_day7);
$row37=mysqli_fetch_assoc($res_day7);
   echo "<h3>7?? ??????????: </h3><br>
       <h4> -????????????:<br> ".$row37['Proino']." </h4> <br>
       <h4>  -??????????????????:<br> ".$row37['Dekatiano']." </h4><br> 
        <h4> -??????????????????????: <br>".$row37['Mesimeriano']." </h4><br>
       <h4>  -????????????????????????:<br> ".$row37['Apogeumatino']." </h4><br>
       <h4>  -??????????????: <br>".$row37['Vradino']." </h4><br>";
    mysqli_close($conn); 
   ?>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById('myBtn');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close')[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = 'block';
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>


