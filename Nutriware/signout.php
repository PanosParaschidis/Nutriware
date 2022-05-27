<?php
session_start();


unset($_SESSION["uname"]);
unset($_SESSION["pwd"]);// where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**

  unset($_SESSION['logged_in']);  
      session_destroy();  
 mysqli_close($conn);
 header("Location: index.php");