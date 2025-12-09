<?php

session_start();

$_SESSION['username'] = "Muaddh";

echo "You are logged in as " .$_SESSION['username'];

echo '<br><a href="welcome.php"> Go to Welcome page</a>';

echo  '<br><a href="logout.php"> Logout </a>';

?>