<?php 
 session_start();

 include 'HELLO.php';
 if(isset($_SESSION['username'])) {
    echo "<br> Welcome back," .$_SESSION['username'];

 } else{
    echo "Please log in first";
 }
echo  '<br><a href="logout.php"> Logout </a>';

?>