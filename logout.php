<?php
session_start();

include "SEEYOU.PHP";
session_destroy();
echo "You have been logged out";


echo '<br><a href="SESSION.php"> Log in</a>';


?>