<?php
// Start session
session_start();

// Simulate database
$users = []; // In real project, this would be a database

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Store user (for demo, in array)
    $users[$username] = $hashed_password;

    echo "User $username registered successfully!<br>";
    echo "Hashed password: $hashed_password<br>";
    echo '<a href="index1.php">Go to Login</a>';
}
?>

<h2>Register</h2>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit" name="register">Register</button>
</form>
