<?php
session_start();

// Simulated database (same as register.php)
$users = [
    "Muaddh" => '$2y$10$ExampleHashGeneratedEarlier'
];

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if user exists
    if(isset($users[$username])) {
        // Verify password
        if(password_verify($password, $users[$username])) {
            $_SESSION['username'] = $username;
            header("Location: welcome1.php");
            exit;
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }
}
?>

<h2>Login</h2>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit" name="login">Login</button>
</form>
<a href="register.php">Register Here</a>
