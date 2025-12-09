<?php
session_start();

if(isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "!<br>";
    echo '<a href="logout1.php">Logout</a>';
} else {
    header("Location: index1.php");
    exit;
}
